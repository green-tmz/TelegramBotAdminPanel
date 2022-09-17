<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conversations\DefaultConversation;
use App\Conversations\StartConversation;

class ConversationController extends Controller
{
     /**
     * Create a new conversation.
     *
     * @return void
     */
    public function index($bot)
    {
        // We use the startConversation method provided by botman to start a new conversation and pass
        // our conversation class as a param to it. 
        $bot->startConversation(new DefaultConversation);
    }
    
    public function start($bot)
    {
		$user = $bot->getUser();
		$bot->reply('Здравствуйте, '.$user->getUsername().'!');
		$bot->startConversation(new StartConversation);
	}
}
