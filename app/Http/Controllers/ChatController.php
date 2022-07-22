<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;  
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;

class ChatController extends Controller
{

    // show all groups that User is Follow
    public function index()
    {
    // select all Users + count how many message are unread from the selected user
        $users = User::find(Auth::id());
        $temp = explode(',',$users->id_chat_to);
        $users = [];
        foreach ($temp as $key) {
            $users[] = User::where('id','=',$key)->get();
        }
        return view('admin.chat-app', ['users' => $users]);
    }
    public function chatStart($id)
    {
        $user = User::find(Auth::id());
        $id_chat_to = $user->id_chat_to;
        if ($id_chat_to == null) {
            $id_chat_to = $id.',';
        } else {
            $tempId = $id.',';
            $temp = explode(',',$id_chat_to);
            foreach ($temp as $key) {
                if ($key == $id) {
                    $tempId = null;
                }
            }
            $id_chat_to = $id_chat_to.$tempId;
        }
        $user->update(['id_chat_to' => $id_chat_to]);
        return redirect('/admin/chat');
    }
    // get all Messages
    public function getMessage($user_id)
    {
    $my_id = Auth::id();

    // Make read all unread message sent
    Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

    // Get all message from selected user
    $messages = Message::where(function ($query) use ($user_id, $my_id) {
    $query->where('from', $user_id)->where('to', $my_id);
    })->oRwhere(function ($query) use ($user_id, $my_id) {
     $query->where('from', $my_id)->where('to', $user_id);
    })->get();

    return view('admin.messages.index', ['messages' => $messages]);
    }
   
   // send new message
    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        return $this->sendRequest($from, $message, $to);
    }
    public function sendRequest($from, $message, $to){	
        $users = DB::select("SELECT * FROM messages WHERE messages.to = " . Auth::id() . " ");
        if(isset($users)){
            foreach ($users as $p) {
                $Data = $p->to;
            }}
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
            );
        $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'), 
                $options
            );
        // notification
        $data = ['from' => $from, 'to' => $to]; 
        $notify = 'notify-channel';
        $pusher->trigger($notify, 'App\\Events\\Notify', $data);
    }
}
