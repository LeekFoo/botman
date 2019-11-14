<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('Bye', function ($bot) {
    $bot->reply('Kill You!');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
