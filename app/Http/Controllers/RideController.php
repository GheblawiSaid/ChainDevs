<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\Ride;
use App\Models\User;
use App\Models\Notification;
use Socialite;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class RideController extends Controller
{
    //
    //
    function dashboard()
    {
        echo "admin dashboard".Auth::user()->id;
    }

    //admin login
    function login()
    {
        $data['active'] = '';
        if (Auth::guard('user')->check() && auth('user')->user()->role_id == 1) {
            return Redirect::to('dashboard');

        } elseif (Auth::guard('user')->check() && auth('admin')->user()->role_id == 2) {
            return Redirect::to('employee_dashboard');
        }
        return view('login');
    }

    function postAdminLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 1) {
            //firstly we get all notifications of logged in users
            $loggedInUserId=Auth::user()->id;
            $notifications=Notification::where('user_id',$loggedInUserId)->get();
            $notification_count=$notifications->count();
            if($notifications->isNotEmpty() && $notification_count>0)
            {
              //  return $notification_count;
              //  return $notifications;
               // view('/admin/layouts/header',["notifications"=>$notifications,"notification_count"=>$notification_count]);
                return Redirect::to('/dashboard');
            }
            else{
                // return $notification_count;
                return Redirect::to('/dashboard');
            }


          //  return Redirect::to('/dashboard',["notifications"=>$notifications]);
        } elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 2) {

            return Redirect::to('employee_dashboard');
        } else {
            return redirect()->back()->with('alert', 'Incorrect Details');

        }

    }
    function LoginWithGoogle()
    {
        return Socialite::driver('google')->redirect();

    }
    public function callback()
    {
       // return 0;
        $user = Socialite::driver('google')->stateless()->user();
        $existed_user=User::where('google_id',$user->id)->first();
        if($existed_user)
        {
             Auth::guard('user')->login($existed_user);
             return redirect::to('/dashboard');
        }
        else{
        $u=new User;
        $u->name =$user->name;
        $u->email=$user->email;
        $u->google_id=$user->id;
        $u->role_id=2;
        $u->notification_status=0;
        $u->password = bcrypt($user->password);
        $u->save();
        Auth::login($u);
        return redirect::to('/dashboard');
        }

    }
    public function getAllUsers()
    {
        $users=User::all();
        return view('admin.Users.show',["users"=>$users]);
    }
    public function updateNotificationStatus($id,Request $req)
    {
        $obj = User::find($id);
        if ($obj) {
            $obj->notification_status = $req->notification_status;
            $obj->save();

            $users=User::all();
            return view('admin.Users.show',["users"=>$users]);

        }
    }
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->to('/');
    }


    function employee_dashboard()
    {
        echo "employee dashboard";
    }
    function addRideview()
    {
        return view("admin/Rides/add");
    }
    function showAllRides()
    {
        // Yahan pr pehly ham sara data fetch krain gy orr phir usko view mai pass krain gy
        $data = Ride::All();
        return view("admin/Rides/show", ["rides" => $data]);
    }
    function editRideView($id)
    {
        $data = Ride::find($id);
        return view("admin/Rides/edit", ["data" => $data]);
    }
    function indexPage()
    {
        $data = Ride::paginate(3);
        return view("index", ["rides" => $data]);

    }
    function loginPage()
    {
        return view("login");

    }
    function registerPage()
    {
        return view("register");

    }
    function postUserRegistration(Request $request)
    {
        //return $request->role_id;
        $user=new User;
        $user->name =$request->username;
        $user->email=$request->email;
        $user->role_id=$request->role_id;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect::to('/login');

    }
    function addNewRide(Request $req)
    {
        $bookedIds=array();
        $obj = new Ride;
        $obj->title = $req->title;
        $obj->description = $req->description;
        $obj->price = $req->price;
        $obj->origion = $req->origion;
        $obj->userId = Auth::user()->id;
        $obj->destination = $req->destination;
        $obj->timeOfRide = $req->timeOfRide;
        $obj->totalCapacity = $req->totalCapacity;
        $obj->availableCapacity = $req->availableCapacity;
        $obj->status = $req->status;
        $obj->booked_ids=json_encode($bookedIds);
        $obj->save();
        return redirect('/addRide');
    }
    function updateRide(Request $req)
    {
        $obj = Ride::find($req->id);
        if ($obj) {
            $obj->title = $req->title;
            $obj->description = $req->description;
            $obj->price = $req->price;
            $obj->origion = $req->origion;
            $obj->userId = Auth::user()->id;;
            $obj->destination = $req->destination;
            $obj->timeOfRide = $req->timeOfRide;
            $obj->totalCapacity = $req->totalCapacity;
            $obj->availableCapacity = $req->availableCapacity;
            $obj->status = $req->status;
            $obj->save();
            return redirect('/showAllRides');
        }

    }
    function bookNewRide($ride_id,$sender_id)
    {
        $data=Ride::find($ride_id);
        $availableCapacity=$data->availableCapacity;
        if($availableCapacity>0)
        {
        $currentCapacity=$availableCapacity-1;
        $bookedIds=json_decode($data->booked_ids);
        // if( in_array( $sender_id ,$bookedIds ) )
        // {
        //         return "has sender_id";
        // }
        $bookedIds[]=$sender_id;
        $data->availableCapacity=$currentCapacity;
        $data->booked_ids=json_encode($bookedIds);
        $data->save();
        $rides = Ride::paginate(3);
        return view("index", ["rides" => $rides]);
        }
        else
        {
             $rides = Ride::paginate(3);
             return view("index", ["rides" => $rides]);
        }
    }
    function deleteRide($id)
    {
        $data = Ride::find($id);
        $data->delete();
        return redirect('/showAllRides');
    }
     function deleteUser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/allUsers');
    }
}
