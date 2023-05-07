<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
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
        //dd($request->all());
        ($request->id) ? $user = User::find($request->id) : $user = new User();
        $user->name     = $request->client_name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->com_name = $request->company_name;
        $user->com_pic  = $request->company_logo;
        $user->address  = $request->address;
        $user->role     = $request->role;
        $save = $user->save();

        return redirect()->back();
    }

    public function user_edit($id)
    {
        $user = User::where(['id'=>$id])->get()->toArray();
        return json_encode($user);
    }


}
