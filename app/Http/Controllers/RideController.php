<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\Ride;
use App\Models\User;
use App\Models\Notification;
use Mail;
use Socialite;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class RideController extends Controller
{


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
            return view('welcome');

          //  return Redirect::to('/dashboard',["notifications"=>$notifications]);
        }
        elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 2) {

             return redirect('/dashboard');
            // return view('admin/layouts/app');
        }
         elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 3) {
                 return redirect('/dashboard');
            //return view('admin/layouts/app');
        }
        else {
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
      public function updateNotificationStatusSingleUser($id,Request $req)
    {
        $obj = User::find($id);
        if ($obj) {
            $obj->notification_status = $req->notification_status;
            $obj->save();
            return redirect('/showProfile');

        }
    }
    //This method helps to change notifications when user clicks on single notification status in notification table
    public function updateNotificationStatusOnAdminPanel($id)
    {
         $obj = Notification::find($id);
         if($obj)
         {
            $obj->status=1;
            $obj->save();
             return redirect('/dashboard');
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
        
        $data = Ride::All();
        return view("admin/Rides/show", ["rides" => $data]);
    }
     function showAllRidesOfLoggedInUser()
    {
        
        $loggedInId=Auth::user()->id;
        $data = Ride::where('userId',$loggedInId)->get();
        return view("admin/Rides/showLoggedIn", ["rides" => $data]);
    }
       function showAllRidesAndSearch()
    {
        
        $data = Ride::paginate(3);
        return view("rides", ["rides" => $data]);
    }
    public function searchRide(Request $req)
    {
       $value=$req->searchRide;
       $data = Ride::where('title', 'LIKE', "%$value%")
                  ->orWhere('price', 'LIKE', "%$value%")
                  ->paginate(3);
        return view("rides", ["rides" => $data]);
    }
    function editRideView($id)
    {
        $data = Ride::find($id);
        return view("admin/Rides/edit", ["data" => $data]);
    }
    function editRideViewOfLoggedIn($id)
    {
        $data = Ride::find($id);
        return view("admin/Rides/editLoggedIn", ["data" => $data]);
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
        $price=$req->price;
        if($price=="")
        {
            $price="tpa";
        }
        else{
            $price=$req->price;
        }
        $obj->price = $price;
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
      function updateLoggedInRide(Request $req)
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
            return redirect('/showAllRidesOfLoggedInUser');
        }

    }
    function bookNewRide($ride_id,$sender_id)
    {
        $data=Ride::find($ride_id);
       // return $data[0]->user_id;
        $availableCapacity=$data->availableCapacity;
        if($availableCapacity>0)
        {
                $currentCapacity=$availableCapacity-1;
                $bookedIds=json_decode($data->booked_ids);
                if( in_array( $sender_id ,$bookedIds ) )
                {
                        return redirect('/');
                }
                else
                {
                        $bookedIds[]=$sender_id;
                        $data->availableCapacity=$currentCapacity;
                        $data->booked_ids=json_encode($bookedIds);
                        $data->save();
                        $rides = Ride::paginate(3);

                        $userIdOfRidePoster=$data->userId;
                        $user=User::where([['id',$userIdOfRidePoster],['notification_status',1]])->get()->first();
                       // return $user;
                        if($user)
                        {
                            // $notify_status=$user->notification_status;
                            // if($notify_status==1)
                            // {
                                $sender_Id=Auth::user()->id;
                                    //  $reciever_user=User::where('id',$userId)->first();
                                        $sender_user=User::where('id',$sender_Id)->first();

                                    $data = [
                                        'sender_first_name' => $sender_user->first_name,
                                        'sender_last_name' => $sender_user->last_name,

                                    ];
                                    $emaildata = array('to' => $user->email, 'to_name' =>$user->first_name);
                                    Mail::send('email_template', $data, function($message) use ($emaildata)
                                    {
                                        $message->to($emaildata['to'], $emaildata['to_name'])
                                                ->from('nadeemaslam0129@gmail.com', 'Ride Web')
                                                ->subject('Ride Reservation Notification');
                                    });
                            // }
                        }
                        return view("index", ["rides" => $rides]);
                }

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
