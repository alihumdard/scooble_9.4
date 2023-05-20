<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\ConnectionException;
use App\Models\User;
use App\Mail\otpVerifcation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Http\Controllers\API\APIController;


class UserController extends Controller
{

    public $api;

    public function __construct(){
        $this->api = new APIController();
    }

    public function lang_change(REQUEST $request)
    {
        app()->setlocale($request->lang);
        session(["lang" => $request->lang]);
       return redirect()->back();
    }

    public function index(REQUEST $request)
    {

        
        if(session('user')){
            return view('index');
        }else{
            return view('login');
        }
    }

    public function clients()
    {
        $clients = User::where(['role'=>'Client'])->orderBy('id', 'desc')->get()->toArray();
        return view('clients', ['data'=>$clients]);
    }    
    
    public function drivers()
    {
        $derivers = User::where(['role'=>'Deriver'])->orderBy('id', 'desc')->get()->toArray();
        return view('drivers',['data'=>$derivers]);
    }   
    
    public function routes()
    {
        return view('routes');
    }   
    
    public function calender()
    {
        return view('calender');
    }

    public function users()
    {
        $users = User::orderBy('id', 'desc')->get()->toArray();
        return view('users',['data'=>$users]);
    }

    public function notifications()
    {
        return view('notifications');
    }

    public function announcmnents()
    {
        return view('announcmnents');
    }

    public function settings()
    {
        return view('settings');
    }

    public function user_store(REQUEST $request)
    {
        // dd($request->all());
        ($request->id) ? $user = User::find($request->id) : $user = new User();
        $user->name     = $request->client_name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->com_name = $request->company_name;
        $user->com_pic  = $request->company_logo;
        $user->address  = $request->address;
        $user->role     = $request->role;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        return redirect()->back();
    }

    public function user_edit($id)
    {
        $user = User::where(['id'=>$id])->get()->toArray();
        return json_encode($user);
    }
    public function user_register(REQUEST $request)
    {
        if($request->all()){
        ($request->id) ? $user = User::find($request->id) : $user = new User();
        $user->name     = $request->client_name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->com_name = $request->company_name;
        $user->com_pic  = $request->company_logo;
        $user->address  = $request->address;
        $user->role     = $request->role;
        $user->password = Hash::make($request->password);
        $save = $user->save();
        return redirect('/');
        }else{
            return view('register');
        }
    }
    public function user_login(REQUEST $request){
     $login = $this->api->user_login($request);
      dd(json_decode($login->getContent()));

        $data['status'] = json_decode($login->getContent())->status;
        $data['token'] = json_decode($login->getContent())->token;
        dd($data);
        $user = User::where('email', $request->email)->first();

        if ($user !== null) {
            if ($user && Hash::check($request->password, $user->password)) {
                if ($user->status === '1' || $user->status === '2' ) {
                    $user = (array)$user;
                    session(['user' => $user]);
                    return redirect('/');
                } else {
                    Session::flash('message', 'You do not have access to login.');
                    return view('login', ['email' => $request->email]);
                }
            } else {
                Session::flash('message', 'Your password is not correct.');
                return view('login', ['email' => $request->email]);
            }
        } else {
            Session::flash('message', 'Your email is not correct.');
            return view('login', ['email' => $request->email]);
        }
               
    }

    public function logout(REQUEST $request){
        session()->forget('user');
        return redirect('/');
    }

    public function forgot_password(REQUEST $request)
    {
        $req = $request->all();
        if(isset($req['no1']) || isset($req['no2']) || isset($req['no3']) || isset($req['no4']) || isset($req['no5'])){
            $array = [ $req["no1"],$req["no2"],$req["no3"],$req["no4"],$req["no5"] ];
            $otp = implode('', $array);
            
            $user = User::where(['email' => $req['email'],'otp'=>$otp])->first();
            if($user)
            {
                Session::flash('email_temp', $user->email);
                return redirect('/set_password');
            }
            else{
                Session::flash('otp', "OTP is not Correct");
                Session::flash('email', $req['email']);
        
                return view('forgotPassword',['email'=> $req['email']]);
            }

        }
        else
        {
            if(isset($req['email'])&&!empty($req['email'])){
                $user = User::where('email', $req['email'])->first();
                if ($user) {
                    $otp = str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT);
                    $emailData = [
                        'otp' => $otp,
                        'name' => $user->name,
                        'body' => 'This is a testing email for OTP verification. Your OTP is:',
                    ];
                    $mail = new otpVerifcation($emailData);
                
                    try {
                        Mail::to($user->email)->send($mail);
                
                        $user->otp = $otp;
                        $save = $user->save();
                
                        Session::flash('otp', "Email sent successfully!");
                        Session::flash('email', $user->email);
                
                        return view('forgotPassword',['email'=> $req['email']]);
                    } catch (\Exception $e) {
                        echo "Failed to send email: " . $e->getMessage();
                    }
                } 
                else {
                    Session::flash('message', 'Enter your correct Email.');
                    return view('forgotPassword',['email'=> $req['email']]);
                }
            }else{
                return view('forgotPassword');
            }
    }
        
    }

    public function set_password(REQUEST $request)
    {
       $req['email'] = ($request->email)? $request->email : session('email_temp');
       if($req['email']){
        if(isset($request->password)){
            $user = User::where('email', $req['email'])->first();
            $user->password = Hash::make($request->password);
            $save = $user->save();
            return redirect('/');
        }else{
            return view('setPassword',['email'=> $req['email']]);
        }
       }else{
        return redirect('/');
       }
    }


}
