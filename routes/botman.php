<?php

use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotMan;


/** @var BotMan $botman */
$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');

