<?php

declare(strict_types=1);
require 'vendor/autoload.php';

class Router{
    public $updates;

    public function __construct(){
        $this->updates = json_decode(file_get_contents("php://input"));
    }

    public function isTelegramUpdate()
    {
        if(isset($this->updates->update_id)){
            return true;
        }
        return false;
    }
}