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
use App\Models\Trip;
use App\Models\Package;
use App\Models\Address;
use Illuminate\Foundation\Auth\Authenticatable;
use App\Jobs\UserProfileEmail;
use Illuminate\Support\Str;
use App\Models\Event;







class APIController extends Controller
{
    public function index(){

    }
    
    public function storeEvent(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'event_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }

        try {
            $event = new Event();
            $event->title = $request->title;
            $event->event_date = $request->event_date;

            $event->save();

            return response()->json(['status' => 'success', 'message' => 'Event saved successfully', 'data' => $event]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing event', 'error' => $e->getMessage()], 500);
        }
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
    

    public function user_login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'email' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()]);
        }

        try {

            $credentials = $request->only('email', 'password');
            $user = User::where('email', $credentials['email'])->first();

            if ($user) {

                if (in_array($user->status, auth_users())) {

                    if(isset($user->role) && $user->role == user_roles('3')){

                        $client = User::where(['role' => 'Client', 'id' => $user->client_id])->first();
                        
                        if($client){
                            
                            if(!in_array($client->status, auth_users())){
                                return response()->json(['status' => 'Deactive', 'message' => 'You are Unauthorized to Login, Contact to the Owner']);
                            }
                        }
                        else{
                            return response()->json(['status' => 'Deactive', 'message' => 'You are assigned  to any client']);
                        }
                    }
                    
                    if (Auth::attempt($credentials)) {

                        $token = $user->createToken('MyApp')->plainTextToken;
                        session(['user_details' => $user]);
                        return response()->json(['status' => 'success', 'message' => 'User successfully logged in', 'token' => $token]);
                    }else{
                        return response()->json(['status' => 'invalid', 'message' => 'Invalid Credentails or Contact to Admin']); 
                    }
                } 
                else if ($user->status == 4) {
                    return response()->json(['status' => 'Unverfied', 'message' => 'User is unverified, Please Check Your Email']);
                } 
                else {
                    return response()->json(['status' => 'Deactive', 'message' => 'You are Unauthorized to Login']);
                }
            }else{

                 return response()->json(['status' => 'invalid', 'message' => 'User does not exist'], 401);
            }
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error retrieving users',
                'error' => $e->getMessage()
            ], 500);
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
            return response()->json(['status' => 'error', 'message' => $validator->errors()]);

        }
    
        try {
            $user = ($request->id) ? User::find($request->id) : new User(); 
             
            $isExistingUser = $user->exists;

            $user->name               = $request->name;
            $user->email              = $request->email;
            $user->phone              = $request->phone;
            $user->com_name           = $request->com_name;
            $user->address            = $request->address;
            $user->role               = $request->role;
            $user->country            = $request->country;
            $user->zip_code           = $request->zip_code;
            $user->city               = $request->city;
            $user->state              = $request->state;
            $user->reset_pswd_attempt = $request->reset_pswd_attempt;
            $user->reset_pswd_time    = $request->reset_pswd_time;
            $user->added_user_id      = Auth::id();
            $user->client_id          = $request->client_id;
            
            if ($request->password) {
                $user->password = Hash::make($request->password);
            } else {
                if(!$isExistingUser){
                $randomPassword = Str::random(8);
                $user->password = Hash::make($randomPassword);
                }
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
    
            if($save){
                if ($request->password) {

                }else{

                    if(!$isExistingUser){
                        $emailData = [
                            'password' => $randomPassword,
                            'name' => $request->name,
                            'email' => $request->email,
                            'body' => "Congratulations! You profile has been created successfully on this Email.",
                        ];
    
                        UserProfileEmail::dispatch($emailData)->onQueue('emails');
                    }
                }
            }
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

    public function trip_store(Request $request): JsonResponse
    {
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required',
        //     'desc' => 'required',
        //     'start_point' => 'required',
        //     'end_point' => 'required',
        //     'trip_date' => 'required|date',
        //     'driver_id' => 'required|integer',
        //     'created_by' => 'required|integer',
        //     'addresses.*.id' => 'integer',
        //     'addresses.*.title' => 'required',
        //     'addresses.*.desc' => 'required',
        // ]);
    
        // if ($validator->fails()) {
        //     return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        // }
    
        try {
            $trip = ($request->trip_detail['id']) ? Trip::find($request->trip_detail['id']) : new Trip();
    
            $isExistingTrip = $trip->exists;
    
            $trip->title = $request->trip_detail['title'];
            $trip->desc = $request->trip_detail['desc'];
            $trip->start_point = $request->trip_detail['start_point'];
            $trip->end_point = $request->trip_detail['end_point'];
            $trip->trip_date = $request->trip_detail['trip_date'];
            $trip->driver_id = $request->trip_detail['driver_id'];

            if(isset($request->trip_detail['client_id']) && !empty($request->trip_detail['client_id'])){
                $trip->client_id = $request->trip_detail['client_id'];
            }
            else{
                $trip->client_id =  Auth::id();
            }

            $trip->created_by = Auth::id();
    
            $save = $trip->save();

            // Save associated addresses
            if ($request->has('address')) {

                $addresses = $request->address;
                $existingAddressIds = [];

                foreach ($addresses as $index => $addressData) {

                    if (isset($addressData['id']) && !empty($addressData['id'])) {

                        $address = Address::find($addressData['id']);
                        
                        if ($address) {

                            $address->title = $addressData['title'];
                            $address->desc = $addressData['desc'];
                            $address->status = $addressData['status'];
                            $address->trip_pic = $addressData['trip_pic'];
                            $address->trip_signature = $addressData['trip_signature'];
                            $address->trip_note = $addressData['trip_note'];
                            $address->trip_id = $trip->id;
                            $address->order_no = $index +1 ;
                            $address->created_by = Auth::id();
                            $address->save();

                            $existingAddressIds[] = $address->id;

                        }

                    } 
                    else {

                        $address = new Address();
                        $address->title = $addressData['title'];
                        $address->desc = $addressData['desc'];
                        $address->status = $addressData['status'];
                        $address->trip_pic = $addressData['trip_pic'];
                        $address->trip_signature = $addressData['trip_signature'];
                        $address->trip_note = $addressData['trip_note'];
                        $address->trip_id = $trip->id;
                        $address->order_no = $index +1;
                        $address->created_by = Auth::id();
                        $address->save();
        
                        $existingAddressIds[] = $address->id;
                    }
                }

                Address::where('trip_id', $trip->id)
                    ->whereNotIn('id', $existingAddressIds)
                    ->delete();
                    
                $message = $isExistingTrip ? 'Trip updated successfully' : 'Trip added successfully';
                return response()->json(['status' => 'success', 'message' => $message, 'data' => $save]);
            
            }

            else{
                return response()->json(['status' => 'error', 'message' => 'trip is not save no address']);
            }
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing trip', 'error' => $e->getMessage()], 500);
        }
    }
    
    public function packages(Request $request): JsonResponse
    {
        try {
            $type = $request->input('type');
            $title = $request->input('title');
            $price = $request->input('price');
            $id = $request->input('id');
    
            $query = Package::orderBy('id', 'ASC');
    
            if ($type) {
                $query->where('type', $type);
            }
    
            if ($title) {
                $query->where('title', 'LIKE', '%' . $title . '%');
            }
    
            if ($price) {
                $query->where('price', $price);
            }

            if ($id) {
                $query->where('id', $id);
            }
            
            $announcement = $query->get();
    
            if ($announcement->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No Package found'], 404);
            }
    
            return response()->json(['status' => 'success', 'message' => 'Package retrieved successfully', 'data' => $announcement]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error retrieving package', 'error' => $e->getMessage()], 500);
        }
    }

    public function package_store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'price' => 'required',
            'users' => 'required',
            'drivers' => 'required',
            'map_api_call' => 'required'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()]);
        }
    
        try {
            $package = ($request->id) ? Package::find($request->id) : new Package(); 
             
            $isExistPackage = $package->exists;

            $package->title        = $request->title;
            $package->desc         = $request->desc;
            $package->type         = $request->type;
            $package->map_api_call = $request->map_api_call;
            $package->price        = $request->price;
            $package->users        = $request->users;
            $package->drivers      = $request->drivers;
            $package->created_by   = Auth::id();
            $save = $package->save();
    
            $message = $isExistPackage ? 'Package updated successfully' : 'Package saved successfully';
            return response()->json(['status' => 'success', 'message' => $message, 'data' => $save]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing Package', 'error' => $e->getMessage()], 500);
        }
    }

}
