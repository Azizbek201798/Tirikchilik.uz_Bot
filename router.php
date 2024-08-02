<?php

$router = new Router();

if($router->isTelegramUpdate()){
    require 'routes/telegram.php';
    return;
}