<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Pusher\Pusher;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Store the message in the database
        $message = new Message();
        $message->sender = $request->sender;
        $message->receiver = $request->receiver;
        $message->message = $request->message;
        $message->save();

        // Send the message to the other party using Pusher
        $options = array(
            'cluster' => 'YOUR_PUSHER_APP_CLUSTER',
            'useTLS' => true
        );
        $pusher = new Pusher(
            'YOUR_PUSHER_APP_KEY',
            'YOUR_PUSHER_APP_SECRET',
            'YOUR_PUSHER_APP_ID',
            $options
        );

        $data['message'] = $request->message;
        $pusher->trigger('chat', 'new-message', $data);

        return response()->json(['success' => true]);
    }
}
