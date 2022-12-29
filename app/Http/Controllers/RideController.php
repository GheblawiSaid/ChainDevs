<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\Ride;

class RideController extends Controller
{
    //
    //
    function dashboard()
    {
        echo "admin dashboard";
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
            // return Redirect::to(URL::previous());
            return Redirect::to('/dashboard');

        } elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], true) && auth('user')->user()->role_id == 2) {
            // return Redirect::to(URL::previous());
            // return Redirect::to('dashboard');
            return Redirect::to('employee_dashboard');
        } else {
            return redirect()->back()->with('alert', 'Incorrect Details');

        }

    }
    public function logout()
    {
        Auth::guard('admin')->logout();
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
    function showAllRidesOnFrontEnd()
    {
        return Ride::All();

    }
    function addNewRide(Request $req)
    {
        $obj = new Ride;
        $obj->title = $req->title;
        $obj->description = $req->description;
        $obj->price = $req->userIds;
        $obj->origion = $req->origion;
        $obj->userIds = $req->userIds;
        $obj->destination = $req->destination;
        $obj->timeOfRide = $req->timeOfRide;
        $obj->totalCapacity = $req->totalCapacity;
        $obj->availableCapacity = $req->availableCapacity;
        $obj->status = $req->status;
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
            $obj->userIds = $req->userIds;
            $obj->destination = $req->destination;
            $obj->timeOfRide = $req->timeOfRide;
            $obj->totalCapacity = $req->totalCapacity;
            $obj->availableCapacity = $req->availableCapacity;
            $obj->status = $req->status;
            $obj->save();
            return redirect('/showAllRides');
        }

    }

    function deleteRide($id)
    {
        $data = Ride::find($id);
        $data->delete();
        return redirect('/showAllRides');
    }
}