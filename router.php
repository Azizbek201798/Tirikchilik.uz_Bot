<?php

declare(strict_types=1);

$router = new Router();

if($router->isTelegramUpdate()){
    require 'routes/telegram.php';
    return;
}

require 'routes/admin_panel.php';
