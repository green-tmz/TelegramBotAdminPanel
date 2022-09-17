<?php

use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('/start', 'App\Http\Controllers\ConversationController@start');
$botman->hears('Hi', function ($bot) {
	$bot->typesAndWaits(2);
    $bot->reply('Hello!');
		
    $bot->say('Message', 'my-recipient-user-id');
});
$botman->hears('Start conversation', 'App\Http\Controllers\ConversationController@index');
$botman->fallback('App\Http\Controllers\FallbackController@index');
