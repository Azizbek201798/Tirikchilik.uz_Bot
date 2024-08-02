<?php

declare(strict_types=1);
require 'vendor/autoload.php';

$bot = new Bot($_ENV['TOKEN']);
$router = new Router();

if(isset($router->updates->message)){
    $message = $router->updates->message;
    $chatId = $message->chat->id;
    $text = $message->text;

    if ($text === "/start"){
        $bot->handleStartCommand($chatId);
    }

}