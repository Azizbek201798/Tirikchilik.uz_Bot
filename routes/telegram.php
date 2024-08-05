<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

$bot = new Bot($_ENV['TOKEN']);
$router = new Router();

if(isset($router->updates->message)){
    $message = $router->updates->message;
    $chatId = $message->chat->id;
    $text = $message->text;

    if ($text === "/start"){
        $bot->handleStartCommand($chatId);
        return;
    }
    
    if ($text === "/stop"){
        $bot->handleStopCommand($chatId);
        return;
    }

    if ($text === "🏠 Bosh menyu"){
        $bot->handleStartCommand($chatId);
        return;
    }

    if ($text === "💼 Hamkorlik"){
        $bot->hamkorlik($chatId);
        return;
    }

    if ($text === "☎️  Kontaktlar"){
        $bot->kontaktlar($chatId);
        return;
    }
    if ($text === "ℹ️ Ma'lumot"){
        $bot->malumot($chatId);
        return;
    }

    if ($text === "🚀 Yetkazib berish shartlari"){
        $bot->yetkazib_berish($chatId);
        return;
    }

    if ($text === "✍️ Izoh qoldirish"){
        $bot->izoh_qoldirish($chatId);
        return;
    }
    if ($text === "😊Menga hamma narsa yoqdi, 5 ❤️"){
        $bot->izoh($chatId);
        return;
    }
    if ($text === "☺️Yaxshi, 4 ⭐️⭐️⭐️⭐️"){
        $bot->izoh($chatId);
        return;
    }if ($text === "😐Qo'niqarli, 3⭐️⭐️⭐️"){
        $bot->izoh($chatId);
        return;
    }if ($text === "☹️Yoqmadi, 2 ⭐️⭐️"){
        $bot->izoh($chatId);
        return;
    }if ($text === "😤Men shikoyat qilmoqchiman 👎🏻"){
        $bot->izoh($chatId);
        return;
    }
}