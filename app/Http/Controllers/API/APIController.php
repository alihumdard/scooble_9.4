<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\otpVerifcation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Announcement;
use App\Models\Notification;


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
                    return response()->json(['status' => 'success','message' => 'users successfully login', 'token' => $token]);
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

    public function announcements(Request $request): JsonResponse
    {
        try {
            $type = $request->input('type');
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $id = $request->input('id');
    
            $query = Announcement::orderBy('id', 'desc');
    
            if ($type) {
                $query->where('type', $type);
            }
    
            if ($start_date) {
                $query->where('start_date', $start_date);
            }
    
            if ($end_date) {
                $query->where('end_date', $end_date);
            }

            if ($id) {
                $query->where('id', $id);
            }
            
            $announcement = $query->get();
    
            if ($announcement->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No Announcement found'], 404);
            }
    
            return response()->json(['status' => 'success', 'message' => 'Announcement retrieved successfully', 'data' => $announcement]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error retrieving announcement', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function announcement_store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }
    
        try {
            $announcement = ($request->id) ? Announcement::find($request->id) : new Announcement(); 
             
            $isExistAnnouncement = $announcement->exists;

            $announcement->title        = $request->title;
            $announcement->desc         = $request->desc;
            $announcement->type         = $request->type;
            $announcement->start_date   = $request->start_date;
            $announcement->end_date     = $request->end_date;
            $announcement->created_by   = Auth::id();
            $save = $announcement->save();
    
            $message = $isExistAnnouncement ? 'Announcement updated successfully' : 'Announcement saved successfully';
            return response()->json(['status' => 'success', 'message' => $message, 'data' => $save]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing Announcement', 'error' => $e->getMessage()], 500);
        }
    }

    public function notifications(Request $request): JsonResponse
    {
        try {
            $title   = $request->input('title');
            $user_id = $request->input('user_id');
            $status  = $request->input('status');
            $id      = $request->input('id');
    
            $query = Notification::orderBy('id', 'desc');
    
            if ($status) {
                $query->where('status', $status);
            }
    
            if ($user_id) {
                $query->where('user_id', $user_id);
            }
    
            if ($title) {
                $query->where('title', $title);
            }

            if ($id) {
                $query->where('id', $id);
            }
            
            $notification = $query->get();
    
            if ($notification->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No Notification found'], 404);
            }
    
            return response()->json(['status' => 'success', 'message' => 'Notification retrieved successfully', 'data' => $notification]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error retrieving notification', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function notification_store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'user_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }
    
        try {
            $notification = ($request->id) ? Notification::find($request->id) : new Notification(); 
             
            $isExistNotification = $notification->exists;

            $notification->title      = $request->title;
            $notification->user_id    = $request->user_id;
            $notification->desc       = $request->desc;
            $notification->status     = $request->status ? $request->status : 'on' ;
            $notification->created_by = Auth::id();
            $save = $notification->save();
    
            $message = $isExistNotification ? 'Notification updated successfully' : 'Notification saved successfully';
            return response()->json(['status' => 'success', 'message' => $message, 'data' => $save]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing Notification', 'error' => $e->getMessage()], 500);
        }
    }

}
