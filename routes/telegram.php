<?php

declare(strict_types=1);

$bot = new Bot($_ENV['TOKEN']);
$router = new Router();

if(isset($router->updates->message)){
    $message = $router->updates->message;
    $chatId = $message->chat->id;
    $text = $message->text;
    var_dump("Azizbek");
    if ($text === "/start"){
        $bot->handleStartCommand($chatId);
    }

    if ($text === "/stop"){
        $bot->handleStopCommand($chatId);
    }
}