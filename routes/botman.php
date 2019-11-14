<?php
use App\Http\Controllers\BotManController;
use App\Conversations\ExampleConversation;

$botman = resolve('botman');

$botman->say('Message', 'my-recipient-user-id', TelegramDriver::class);

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('Bye', function ($bot) {
    $bot->reply('Kill You!');
});

$botman->hears('hey', function ($bot) {
    $bot->typesAndWaits(2);
    $bot->reply("Tell me more!");
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
