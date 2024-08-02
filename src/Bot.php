<?php

declare(strict_types=1);
use GuzzleHttp\Client;
require 'vendor/autoload.php';

class Bot{
    private string $api;
    public Client $http;

    public function __construct($token){
        $this->api = "https://api.telegram.org/bot{$token}";
        $this->http = new Client(['base_uri' => $this->api]);
    }
    
    public function handleStartCommand(int $chat_id){
        $this->http->post("sendMessage",[
            "form-params" => [
                'chat_id' => $chat_id,
                'text' => 'Welcome to OqTepaLavash Bot Sergeli!',
            ]
            ]);
    }

}