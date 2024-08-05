<?php

declare(strict_types=1);
use GuzzleHttp\Client;

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
                'text' => "Assalomu Alaykum, Azizbek!\nIjodimizga qiziqish bildirganingiz uchun tashakkur!\nHozircha siz uchun futbolka, xudi, svitshot, kepka va stikerlar mavjud. Yaqin orada tanlovni kengaytiramiz. Aytganday, istagan turdagi kiyim buyurtma berganlarlarga qo'shimcha ravishda stikerpak sovg'a qilinadi :)\nO'zbekiston bo'ylab yetkazib berish 2-5 ish kunini tashkil qiladi.\nToshkent bo'ylab yetkazib berish - 20 000 so'm.\nO‘zbekiston bo'ylab yetkazib berish - 30 000 so‘m.\n450 000 so'mdan ortiq buyurtmalarni yetkazib berish - tekin!\nAgar bu shartlar sizni qoniqtirsa, “🔥 Mahsulotlar” bo'limiga o'tish orqali buyurtma berishni boshlashingiz mumkin.",
            ]
            ]);
    }
    public function handleStopCommand(int $chat_id){
        $this->http->post("sendMessage",[
            "form-params" => [
                'chat_id' => $chat_id,
                'text' => "Haridlaringizdan minnatdormiz!\n",
            ]
            ]);
    }
}