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
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Announcement;
use App\Models\Package;
use App\Models\Notification;
use Illuminate\Foundation\Auth\Authenticatable;
use Carbon\Carbon;
use App\Models\Trip;
use App\Models\Address;


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

    public function index(Request $request)
    {
        if(session('user')){

            $user = auth()->user();
            session(['user_details' => $user]);
            $now = Carbon::now('Asia/Karachi');
            $current_date = $now->format('Y-m-d H:i:s');

            // User roles: 1 for admin, 2 for client, 3 for driver
            if(isset($user->role) && $user->role == user_roles('2')){
            
                $announcements = Announcement::where('start_date', '<=', $current_date)
                    ->where('end_date', '>=', $current_date)
                    ->get()->toArray();
                
                return view('client_dashboard', ['user' => $user, 'announcements' => $announcements]);
            }

            else if(isset($user->role) && $user->role == user_roles('3')){

                return view('driver_dashboard', ['user' => $user]);
            }

            else{

                return view('index', ['user' => $user]);
            }
        }
        else {
            return view('login');
        }
    }
    
    public function clients()
    {
        $user = auth()->user();
        $page_name = 'clients';

        if(!view_permission($page_name)){
            return redirect()->back();  
        }

        $clients = User::where(['role' => 'Client'])->orderBy('id', 'desc')->get()->toArray();
        return view('clients', ['data' => $clients,'user'=>$user ,'add_as_user'=> user_roles('2')]);

    }

    public function drivers()
    {
        $user = auth()->user();
        $page_name = 'drivers';

        if(!view_permission($page_name)){
            return redirect()->back();  
        }

        if(isset($user->role) && $user->role == user_roles('1')){

            $drivers = User::join('users as c', 'users.client_id', '=', 'c.id')
            ->where('users.role', 'Driver')
            ->select('users.*', 'c.name as client_name', 'c.user_pic as client_pic')
            ->orderBy('users.id', 'desc')
            ->get()
            ->toArray();   

            return view('drivers', ['data' => $drivers,'user'=>$user,'add_as_user'=> user_roles('3')]);
        } 
        else{

            $derivers = User::where(['role' => 'Driver','client_id' => $user->id])->orderBy('id', 'desc')->get()->toArray();
            return view('drivers', ['data' => $derivers,'user'=>$user ,'add_as_user'=> user_roles('3')]); 
        }

    }

    public function routes()
    {
        $user = auth()->user();
        $page_name = 'routes';

        if(!view_permission($page_name)){
            return redirect()->back();  
        }

        if(isset($user->role) && $user->role == user_roles('1')){

            $trips = Trip::join('users as drivers', 'drivers.id', '=', 'trips.driver_id')
            ->join('users as clients', 'clients.id', '=', 'trips.client_id')
            ->select('trips.*', 'drivers.id as driver_id', 'drivers.name as driver_name', 'drivers.user_pic as driver_pic', 'clients.user_pic as client_pic', 'clients.name as client_name')
            ->orderBy('trips.id', 'desc')
            ->get()
            ->toArray();

            return view('routes', ['data' => $trips,'user'=>$user]);
        } 

        else if(isset($user->role) && $user->role == user_roles('2')){
            $trips = Trip::join('users', 'users.id', '=', 'trips.driver_id')
            ->where('trips.client_id', $user->id)
            ->select('trips.*', 'users.id as driver_id', 'users.name as driver_name', 'users.user_pic  as driver_pic')
            ->orderBy('trips.id', 'desc')
            ->get()
            ->toArray();
            return view('routes', ['data' => $trips,'user'=>$user]);
        }
        
        else {
            $trips = Trip::join('users', 'users.id', '=', 'trips.client_id')
            ->where('trips.driver_id', $user->id)
            ->select('trips.*', 'users.id as client_id', 'users.name as client_name', 'users.user_pic  as client_pic')
            ->orderBy('trips.id', 'desc')
            ->get()
            ->toArray();
            return view('routes', ['data' => $trips,'user'=>$user]);
        } 

    }

    public function create_trip(Request $request)
    {
        $user = auth()->user();
        $page_name = 'create_trip';

        if(!view_permission($page_name)){
            return redirect()->back();  
        }

        if ($request->has('id')) {
            
            if(isset($user->role) && $user->role == user_roles('1')){   
                $trip = Trip::with(['addresses' => function ($query) {
                    $query->orderBy('order_no', 'ASC');
                }])->find($request->id);
                
                $tripData = $trip->toArray();
                $tripData['addresses'] = $trip->addresses->toArray();
                
                $client_list = User::where(['role' => 'Client'])->orderBy('id', 'desc')->select('id','name')->get()->toArray();
                $deriver_list = User::where(['role' => 'Driver'])->orderBy('id', 'desc')->select('id','name')->get()->toArray();
                return view('create_trip',['data'=>$tripData, 'user'=>$user ,'driver_list'=>$deriver_list, 'client_list'=>$client_list]);
            }
            
            else{
                $trip = Trip::with(['addresses' => function ($query) {
                    $query->orderBy('order_no', 'ASC');
                }])->find($request->id);
                
                $tripData = $trip->toArray();
                $tripData['addresses'] = $trip->addresses->toArray();
                
                $deriver_list = User::where(['role' => 'Driver'])->orderBy('id', 'desc')->select('id','name')->get()->toArray();
                return view('create_trip',['data'=>$tripData, 'user'=>$user ,'driver_list'=>$deriver_list]);
            }
        }
        else{
            if(isset($user->role) && $user->role == user_roles('1')){    
                $deriver_list = User::where(['role' => 'Driver'])->orderBy('id', 'desc')->select('id','name')->get()->toArray();
                $client_list = User::where(['role' => 'Client'])->orderBy('id', 'desc')->select('id','name')->get()->toArray();
                return view('create_trip',['user'=>$user ,'driver_list'=>$deriver_list , 'client_list'=>$client_list]);
            }else{
                $deriver_list = User::where(['role' => 'Driver','client_id' => $user->id])->orderBy('id', 'desc')->get()->toArray();
                return view('create_trip',['user'=>$user ,'driver_list'=>$deriver_list]);
            }
        }
    }

    public function driver_map(Request $request)
    {
        $user = auth()->user();
        $page_name = 'driver_map';

        if(!view_permission($page_name)){
            return redirect()->back();  
        }

        if ($request->has('id')) {
            
            if(isset($user->role) && $user->role == user_roles('3')){   
                $trip = Trip::with(['addresses' => function ($query) {
                    $query->orderBy('order_no', 'ASC');
                }])->find($request->id);
                
                $tripData = $trip->toArray();
                $tripData['addresses'] = $trip->addresses->toArray();
                return view('driver_map',['data'=>$tripData, 'user'=>$user]);
            }
        }    
        else{
            return redirect()->back();
         }
        
    }
    
    public function announcements_alerts()
    {
        return view('announcements_alerts');
    }

    public function pdf_templates()
    {
        return view('pdf_templates');
    }

    public function home(Request $request)
    {
        $user = auth()->user();
        $page_name = 'home';
    
        if (!view_permission($page_name)) {
            return redirect()->back();
        }
        
        if ($request->has('id')) {
            
            $package  = Package::where('id',$request->id)->first();
            return view('subscription', ['data' => $package, 'user' => $user]);
        } 
        else {

        $package = Package::orderBy('id', 'ASC')->get()->toArray();
        return view('home', ['data' => $package, 'user' => $user]);
        }
    }

    public function subscription()
    {
        return view('subscription');
    }


    public function calender()
    {
        return view('calender');
    }

    public function calendar_maintable()
    {
        return view('calendar_maintable');
    }

    public function users()
    {
        $user = auth()->user();
        $page_name = 'users';

        if(!view_permission($page_name)){
            return redirect()->back();  
        }

        $users = User::where(['role' => 'Admin'])->orderBy('id', 'desc')->orderBy('id', 'desc')->get()->toArray();
        return view('users', ['data' => $users ,'user'=>$user ,'add_as_user'=> user_roles('1')]);
    }

    public function notifications()
    {
        $user = auth()->user();
        $page_name = 'notifications';
    
        if (!view_permission($page_name)) {
            return redirect()->back();
        }
        
        $notifications  = Notification::where('user_id',$user->id)->get()->toArray();
        return view('notifications', ['data'=>$notifications , 'user' => $user]);
    }

    public function announcements(Request $request)
    {
        $user = auth()->user();
        $page_name = 'announcements';
    
        if (!view_permission($page_name)) {
            return redirect()->back();
        }
    
        if ($request->has('id')) {
            
            $announcmnent  = Announcement::where('id',$request->id)->get()->toArray();
            $announcmnents = Announcement::orderBy('id', 'desc')->get()->toArray();
            return view('announcements', ['data' => $announcmnents, 'user' => $user, 'announcmnent'=>$announcmnent[0]]);
        } 
        else {

            $announcmnents = Announcement::orderBy('id', 'desc')->get()->toArray();
            return view('announcements', ['data' => $announcmnents, 'user' => $user]);
        }
    
    }
    

    public function settings()
    {
        $user = auth()->user();
        $page_name = 'settings';
    
        if (!view_permission($page_name)) {
            return redirect()->back();
        }

        $user = auth()->user();
        return view('settings',['user' => $user]);
    }

    public function user_store(REQUEST $request)
    {
        ($request->id) ? $user = User::find($request->id) : $user = new User();
        $user->name     = $request->client_name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->com_name = $request->company_name;
        $user->com_pic  = $request->company_logo;
        $user->address  = $request->address;
        $user->role     = $request->role;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $save = $user->save();

        return redirect()->back();
    }

    public function user_edit($id)
    {
        $user = User::where(['id' => $id])->get()->toArray();
        return json_encode($user);
    }
    public function user_register(REQUEST $request)
    {
        if ($request->all()) {
            ($request->id) ? $user = User::find($request->id) : $user = new User();
            $user->name     = $request->username;
            $user->email    = $request->email;
            $user->phone    = $request->phone;
            $user->com_name = $request->company_name;
            $user->com_pic  = $request->company_logo;
            $user->address  = $request->address;
            $user->role     = $request->role;
            $user->password = Hash::make($request->password);
            $save = $user->save();
            return redirect('/');
        } else {
            return view('register');
        }
    }
  
    public function user_login(REQUEST $request)
    {
        $login = $this->api->user_login($request);
        $data['status'] = json_decode($login->getContent())->status;
        if($data['status']== "success"){
        $data['token'] = json_decode($login->getContent())->token;
        session(['user' => $data['token']]);
        }

        echo($login->getContent());
    }

    public function logout(REQUEST $request)
    {
        session()->flush();
        return redirect('/');
    }

    public function forgot_password(REQUEST $request)
    {
        $req = $request->all();
        if (isset($req['no1']) || isset($req['no2']) || isset($req['no3']) || isset($req['no4']) || isset($req['no5'])) {
            $array = [$req["no1"], $req["no2"], $req["no3"], $req["no4"], $req["no5"]];
            $otp = implode('', $array);

            $user = User::where(['email' => $req['email'], 'otp' => $otp])->first();
            if ($user) {
                Session::flash('email_temp', $user->email);
                return redirect('/set_password');
            } else {
                Session::flash('otp', "OTP is not Correct");
                Session::flash('email', $req['email']);

                return view('forgotPassword', ['email' => $req['email']]);
            }
        } else {
            if (isset($req['email']) && !empty($req['email'])) {
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

                        return view('forgotPassword', ['email' => $req['email']]);
                    } catch (\Exception $e) {
                        echo "Failed to send email: " . $e->getMessage();
                    }
                } else {
                    Session::flash('message', 'Enter your correct Email.');
                    return view('forgotPassword', ['email' => $req['email']]);
                }
            } else {
                return view('forgotPassword');
            }
        }
    }

    public function set_password(REQUEST $request)
    {
        $req['email'] = ($request->email) ? $request->email : session('email_temp');
        if ($req['email']) {
            if (isset($request->password)) {
                $user = User::where('email', $req['email'])->first();
                $user->password = Hash::make($request->password);
                $save = $user->save();
                if($save){ return redirect('/'); } 
                
            } else {
                return view('setPassword', ['email' => $req['email']]);
            }
        } else {
            return redirect('/');
        }
    }

    public function change_status(REQUEST $request)
    {
        $user = User::where('id',$request->id)->first();
        if($request->status == 1){
        $user->status     = $request->status;
        $save = $user->save();
            if($save){
                $emailData = [
                    'otp' => 'Account Activation',
                    'name' => $user->name,
                    'body' => 'Dear You Account has been activated successfully :',
                ];
                $mail = new otpVerifcation($emailData);

                try {
                    Mail::to($user->email)->send($mail);
                     echo $save;
                } catch (\Exception $e) {
                    echo "Failed to send email: " . $e->getMessage();
                }

            }
        }
        else{
            $user->status     = $request->status;
            $save = $user->save(); 
            echo $save;
        }
        
    }

    public function handleIPN(Request $request)
    {
 
        if ($this->verifyIPN($request->all())) {

            $paymentStatus = $request->input('payment_status');
            $subscriptionId = $request->input('subscr_id');
            
            if ($paymentStatus === 'Completed') {

            } elseif ($paymentStatus === 'Failed') {

            }
            
            return response('OK', 200);
        }
        
        return response('Bad Request', 400);
    }
    
    private function verifyIPN(array $data)
    {
        
        
        $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        
        $data['cmd'] = '_notify-validate';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Host: www.sandbox.paypal.com',
            'Connection: close',
        ]);
        
        $response = curl_exec($ch);
        
        curl_close($ch);
        
        if ($response === 'VERIFIED') {
            return true;
        }
        
        return false;
    }
    
    public function success(Request $request)
    {
        
        
        $subscriptionId = $request->input('subscription_id');
        
        return 'subscription.success';
      
    }
    
    public function cancel(Request $request)
    {
        
        
        $subscriptionId = $request->input('subscription_id');
        
        
        return 'subscription.cancel';
    }
    

}
