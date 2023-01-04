<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;
use App\Models\Notification;
use Mail;
class chatController extends Controller
{
    //
    public function getChats()
    {
        return view('admin.Chats.chat');
    }
    public function postChatMessage($id)
    {

    }
    public function getAllChatsOfLoggedInUser()
    {
        $sender_Id=Auth::user()->id;
        $allChatsFromSender= Chat::where('sender_id',$sender_Id)->get();
        $allReciverIds=array();
        foreach($allChatsFromSender as $chats)
        {
           $allReciverIds[]=$chats->receiver_id;
        }
        $allReciversUniqueIds=array_unique($allReciverIds);
        $allUsers=User::select('id', 'name')->whereIn('id', $allReciversUniqueIds)->get();
        if($allChatsFromSender)
        {
            return view('admin.Chats.chat',["chats"=>$allChatsFromSender,"users"=>$allUsers,"receiver_messages"=>null,"sender_messages"=>null,"userId"=>null,"rideId"=>null]);
        }
        else
        {
               return view('admin.Chats.chat');
        }
    }
    public function getChatWithId($id)
    {
        $myid=Auth::user()->id;
        $messages= Chat::whereIn('receiver_id',[$id,$myid])->get();
        $rideId= Chat::select('ride_id')->where('receiver_id',$id)->get();
        $user= User::where('id',$id)->first();
        $sender_Id=Auth::user()->id;
        $allChatsFromSender= Chat::where('sender_id',$sender_Id)->get();
        $allReciverIds=array();
        foreach($allChatsFromSender as $chats)
        {
           $allReciverIds[]=$chats->receiver_id;
        }
        array_push($allReciverIds,$id);
        $allReciversUniqueIds=array_unique($allReciverIds);
        $allUsers=User::select('id', 'name')->whereIn('id', $allReciversUniqueIds)->get();
        if(($messages || $allUsers ) && count($rideId)===0)
        {
             return view('admin.Chats.chat',["messages"=>$messages,"user"=>$user,"users"=>$allUsers,"userId"=>$id,"rideId"=>null]);

        }
        else if(( $messages || $allUsers ) && count($rideId)!==0)
        {
            return view('admin.Chats.chat',["messages"=>$messages,"user"=>$user,"users"=>$allUsers,"userId"=>$id,"rideId"=>$rideId[0]['ride_id']]);
        }
        else
        {
        return view('admin.Chats.chat');
        }
    }
    public function chatWithANewUserAndExistingUser($rideId,$userId)
    {
        $sender_Id=Auth::user()->id;
        $messages= Chat::whereIn('receiver_id',[$userId,$sender_Id])->get();
        $user= User::where('id',$userId)->first();
        $allChatsFromSender= Chat::where('sender_id',$sender_Id)->get();
        $allReciverIds=array();
        foreach($allChatsFromSender as $chats)
        {
           $allReciverIds[]=$chats->receiver_id;
        }
        array_push($allReciverIds,$userId);
        $allReciversUniqueIds=array_unique($allReciverIds);
        $allUsers=User::select('id', 'name')->whereIn('id', $allReciversUniqueIds)->get();

        if($messages || $allUsers)
        {
            return view('admin.Chats.chat',["messages"=>$messages,"user"=>$user,"users"=>$allUsers,"userId"=>$userId,"rideId"=>$rideId]);
        }
        else
        {
        return view('admin.Chats.chat');
        }
    }
    public function getAllNotifications()
    {
        $notifications=Notification::all();
        return view('admin/Notifications/show',["notifications"=>$notifications]);
    }
     public function changeNotificationStatusOfLoggedInUser($notification_id,$user_id)
    {
        // $notification=Notification::where('id',$notification_id)->get();
        // if($notification->isNotEmpty())
        // {

        // }
        // else{

        // }
        return view('admin/Notifications/show');
    }
    public function addMessage(Request $req)
    {
        $userId=$req->receiver_id;
        $sender_Id=Auth::user()->id;
        $obj = new Chat;

        $obj->message = $req->message;
        $obj->sender_id = $sender_Id;
        $obj->receiver_id = $userId;
        $obj->ride_id = $req->ride_id;
        $obj->status =0;
        $obj->save();

        //After sending message to user we will also send a notification
        //if notification_status of user is 1 then notification will be sent
        $obj1 = User::where([['id',$sender_Id],['notification_status','=',1]])->get();
        if(count($obj1)>0)
        {
         $noti=$obj1[0]->notification_status;
         //return $noti;
            if($noti == 1)
            {
            $notification=new Notification;
            $notification->title="You receive a new message";
            $notification->message=$req->message;
            $notification->user_id=$userId;
            $notification->ride_id=$req->ride_id;
            $notification->type="chat";
            $notification->save();

            $reciever_user=User::where('id',$userId)->first();
            $sender_user=User::where('id',$userId)->first();

             $data = [
                'sender_first_name' => $sender_user->first_name,
                'sender_last_name' => $sender_user->last_name,

            ];
            $emaildata = array('to' => $reciever_user->email, 'to_name' =>$reciever_user->first_name);
            Mail::send('email_template', $data, function($message) use ($emaildata)
             {
                $message->to($emaildata['to'], $emaildata['to_name'])
                        ->from('nadeemaslam0129@gmail.com', 'Ride Web')
                        ->subject('New Message Notification');
            });
            }
        }




        $sender_Id=Auth::user()->id;
        $messages= Chat::whereIn('receiver_id',[$userId,$sender_Id])->get();
        $rideId= Chat::select('ride_id')->where('receiver_id',$userId)->get();
        $user= User::where('id',$userId)->first();
        $allChatsFromSender= Chat::where('sender_id',$sender_Id)->get();
        $allReciverIds=array();
        foreach($allChatsFromSender as $chats)
        {
           $allReciverIds[]=$chats->receiver_id;
        }
        array_push($allReciverIds,$userId);
        $allReciversUniqueIds=array_unique($allReciverIds);
        $allUsers=User::select('id', 'name')->whereIn('id', $allReciversUniqueIds)->get();

        if($messages || $allUsers)
        {
            return view('admin.Chats.chat',["messages"=>$messages,"users"=>$allUsers,"userId"=>$userId,"rideId"=>$req->ride_id]);
        }
        else
        {
        return view('admin.Chats.chat');
        }
    }
    function deleteNotification($id)
    {
        $obj=Notification::find($id);
        $obj->delete();
       // $notifications=Notification::all();
        return redirect('/allNotifications');
    }
}
