<?php

namespace App\Http\Controllers;

use App\User;
use Input;
use Auth;
use App\Chat;
use App\ChatMessage;
use Validator;
use Request;
use Session;
use Redirect;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ChatController extends BaseController
{

	public function startChat($username)
	{
		if(Auth::check()){
			
			$chat = new Chat();
			$chat->user1 = Auth::user()->username;
			$chat->user2 = 'no name';
			$chat->save();
			
			return view('chats')->with('username', Auth::user()->username);
		}
		else
		{
			return Redirect::to('/login');
		}
		
	}
	
    public function sendMessage()
    {
        $username = Input::get('username');
        $text = Input::get('text');

        $chatMessage = new ChatMessage();
        $chatMessage->sender_username = Auth::user()->username;
        $chatMessage->message = $text;
        $chatMessage->save();
    }

    public function isTyping()
    {
        $username = Input::get('username');

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
            $chat->user1_is_typing = true;
        else
            $chat->user2_is_typing = true;
        $chat->save();
    }

    public function notTyping()
    {
        $username = Input::get('username');

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
            $chat->user1_is_typing = false;
        else
            $chat->user2_is_typing = false;
        $chat->save();
    }

    public function retrieveChatMessages()
    {		
        if(Auth::check()){
			$username =  Auth::user()->username;
		}
		else
		{
			return Redirect::to('/login');
		}
		
        $message = ChatMessage::where('sender_username', '!=', $username)->where('read', '=', false)->first();

        if (count($message) > 0)
        {
            $message->read = true;
            $message->save();
            return $message->message;
        }
    }

    public function retrieveTypingStatus()
    {
        $username = Input::get('username');

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
        {
            if ($chat->user2_is_typing)
                return $chat->user2;
        }
        else
        {
            if ($chat->user1_is_typing)
                return $chat->user1;
        }
    }
}