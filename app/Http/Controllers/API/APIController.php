<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\otpVerifcation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class APIController extends Controller
{
    public function index(){

    }

    public function clients(): JsonResponse
    {
        try {
        
            $clients = User::where('role', 'Client')->orderBy('id', 'desc')->get();
    
            if ($clients->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No clients found'], 404);
            }
    
            return response()->json(['status' => 'success', 'message' => 'All clients for Admin', 'data' => $clients]);
        
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error retrieving clients', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function drivers(): JsonResponse
    {
        

        try {

            $drivers = User::where(['role'=>'Driver'])->orderBy('id', 'desc')->get();
            
            if ($drivers->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No drivers found'], 404);
            }
    
            return response()->json(['status' => 'success', 'message' => 'All drivers for Admin', 'data' => $drivers]);
        
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error retrieving drivers', 'error' => $e->getMessage()], 500);
        }
    }

    public function users(Request $request): JsonResponse
    {
        try {
            $role = $request->input('role');
            $userAddedId = $request->input('added_user_id');
            $clientId = $request->input('client_id');
            $id = $request->input('id');
    
            $query = User::orderBy('id', 'desc');
    
            if ($role) {
                $query->where('role', $role);
            }
    
            if ($userAddedId) {
                $query->where('added_user_id', $userAddedId);
            }
    
            if ($clientId) {
                $query->where('client_id', $clientId);
            }

            if ($id) {
                $query->where('id', $id);
            }
            
            $users = $query->get();
    
            if ($users->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No users found'], 404);
            }
    
            return response()->json(['status' => 'success', 'message' => 'Users retrieved successfully', 'data' => $users]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error retrieving users', 'error' => $e->getMessage()], 500);
        }
    }
    

    public function user_login(REQUEST $request): JsonResponse
    {
        try {

        $credentials = $request->only('email', 'password');
        if ($user = User::where('email', $credentials['email'])->whereIn('status', [1,2])->first())
        {
                if (Auth::attempt($credentials)) {
                    $token = $user->createToken('MyApp')->plainTextToken;
                    return response()->json(['status' => 'success', 'token' => $token]);
                }
        }

        return response()->json(['status' => 'error', 'message' => 'Unauthorized'], 401);
      
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                 'message' => 'Error retrieving users', 
                 'error' => $e->getMessage()],500
                );
        }
    }
    
    
    public function user_store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'com_pic' => 'image',
            'user_pic' => 'image',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($request->id),
            ],
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }
    
        try {
            $user = ($request->id) ? User::find($request->id) : new User(); 
             
            $isExistingUser = $user->exists;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->com_name = $request->com_name;
            $user->address = $request->address;
            $user->role = $request->role;
            $user->added_user_id = Auth::id();
            $user->client_id = $request->client_id;
            
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
    

            $oldComPicPath = $user->com_pic;
            $oldUserPicPath = $user->user_pic;
    
            if ($request->hasFile('com_pic')) {
                if ($request->id && $oldComPicPath) {
                    Storage::disk('public')->delete($oldComPicPath);
                }
    
                $comPic = $request->file('com_pic');
                $comPicPath = $comPic->store('com_pics', 'public');
                $user->com_pic = $comPicPath;
            }
            
            if ($request->hasFile('user_pic')) {
                if ($request->id && $oldUserPicPath) {
                    Storage::disk('public')->delete($oldUserPicPath);
                }
    
                $userPic = $request->file('user_pic');
                $userPicPath = $userPic->store('user_pics', 'public');
                $user->user_pic = $userPicPath;
            }

            $save = $user->save();
    
            $message = $isExistingUser ? 'User updated successfully' : 'User added successfully';
            return response()->json(['status' => 'success', 'message' => $message, 'data' => $save]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing user', 'error' => $e->getMessage()], 500);
        }
    }

    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'com_pic' => 'image',
            'user_pic' => 'image',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($request->id),
            ],
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }
    
        try {
            $user = ($request->id) ? User::find($request->id) : new User(); 
             
            $isExistingUser = $user->exists;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->com_name = $request->com_name;
            $user->address = $request->address;
            $user->role = 'Client';
            
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
    

            $oldComPicPath = $user->com_pic;
            $oldUserPicPath = $user->user_pic;
    
            if ($request->hasFile('com_pic')) {
                if ($request->id && $oldComPicPath) {
                    Storage::disk('public')->delete($oldComPicPath);
                }
    
                $comPic = $request->file('com_pic');
                $comPicPath = $comPic->store('com_pics', 'public');
                $user->com_pic = $comPicPath;
            }
            
            if ($request->hasFile('user_pic')) {
                if ($request->id && $oldUserPicPath) {
                    Storage::disk('public')->delete($oldUserPicPath);
                }
    
                $userPic = $request->file('user_pic');
                $userPicPath = $userPic->store('user_pics', 'public');
                $user->user_pic = $userPicPath;
            }

            $save = $user->save();
    
            $message = $isExistingUser ? 'User updated successfully' : 'User Register successfully';
            return response()->json(['status' => 'success', 'message' => $message, 'data' => $save]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing user', 'error' => $e->getMessage()], 500);
        }
    }

    
    

}
