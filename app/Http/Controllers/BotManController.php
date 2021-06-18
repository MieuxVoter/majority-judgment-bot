<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use Illuminate\View\View;
use JABirchall\BotMan\Drivers\Discord\DiscordDriver;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
//        DriverManager::loadDriver(DiscordDriver::class);

        $botman = app('botman');


        $botman->listen();
    }

    /**
     * @return Factory|View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }
}
