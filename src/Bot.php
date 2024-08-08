<?php

declare(strict_types=1);
require 'vendor/autoload.php';

use GuzzleHttp\Client;

class Bot{
    public string $api;
    public Client $http;

    public function __construct(string $token){
        $this->api = "https://api.telegram.org/bot{$token}/";
        $this->http = new Client(['base_uri' => $this->api]);
    }

    public function getUpdates(){
        return json_decode(file_get_contents("php://input"));
    }

    public function handleStartCommand(int $chat_id){
        $keyboard = [
            'keyboard' => [
                [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                [['text' => '🌐 Tilni tanlash']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ];
        $encodedKeyboard = json_encode($keyboard);
    
        $this->http->post("sendMessage",[
            "form_params" => [
                'chat_id' => $chat_id,
                'text' => "Assalomu Alaykum, Azizbek!\n\nIjodimizga qiziqish bildirganingiz uchun tashakkur!\n\nHozircha siz uchun futbolka, xudi, svitshot, kepka va stikerlar mavjud. Yaqin orada tanlovni kengaytiramiz. Aytganday, istagan turdagi kiyim buyurtma berganlarlarga qo'shimcha ravishda stikerpak sovg'a qilinadi :)\n\nO'zbekiston bo'ylab yetkazib berish 2-5 ish kunini tashkil qiladi.\n\nToshkent bo'ylab yetkazib berish - 20 000 so'm.\nO‘zbekiston bo'ylab yetkazib berish - 30 000 so‘m.\n\n450 000 so'mdan ortiq buyurtmalarni yetkazib berish - tekin!\n\nAgar bu shartlar sizni qoniqtirsa, “🔥 Mahsulotlar” bo'limiga o'tish orqali buyurtma berishni boshlashingiz mumkin.",
                'reply_markup' => $encodedKeyboard,
            ]
            ]);
    }

    public function handleStopCommand(int $chat_id){
        $this->http->post("sendMessage",[
            "form_params" => [
                'chat_id' => $chat_id,
                'text' => 'Sizni yana kutamiz! 😊',
            ]
            ]);
    }

    public function hamkorlik(int $chat_id){
        
        $keyboard = [
            'keyboard' => [
                [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ];
        $encodedKeyboard = json_encode($keyboard);
        $this->http->post("sendMessage",[
            "form_params" => [
                'chat_id' => $chat_id,
                'text' => "Biz sizning kompaniyangiz bilan hamkorlik qilishdan mamnunmiz va sizning buyurtmangizga asosan futbolkalar, xudi, svitshot va boshqa ko'p narsalarni tayyorlashimiz mumkin.\n\nMenejer bilan bog'lanish uchun: @tirik_chilik",
                'reply_markup' => $encodedKeyboard,
            ]
            ]);
        }
        public function malumot(int $chat_id){
        
            $keyboard = [
                'keyboard' => [
                    [['text' => '✍️ Izoh qoldirish']],
                    [['text' => '🚀 Yetkazib berish shartlari'],['text' => '☎️  Kontaktlar']],
                    [['text' => '🏠 Bosh menyu']],
                ],
                'resize_keyboard' => true,
                'one_time_keyboard' => true,
            ];
            $encodedKeyboard = json_encode($keyboard);
            $this->http->post("sendMessage",[
                "form_params" => [
                    'chat_id' => $chat_id,
                    'text' => "Kerakli bo'limni tanlang ⬇️",
                    'reply_markup' => $encodedKeyboard,
                ]
                ]);
            }
        public function kontaktlar(int $chat_id){
    
            $keyboard = [
                'keyboard' => [
                    [['text' => '✍️ Izoh qoldirish']],
                    [['text' => '🚀 Yetkazib berish shartlari'],['text' => '☎️  Kontaktlar']],
                    [['text' => '🏠 Bosh menyu']],
                ],
                'resize_keyboard' => true,
                'one_time_keyboard' => true,
            ];
            $encodedKeyboard = json_encode($keyboard);
 
            $this->http->post("sendMessage",[
                "form_params" => [
                    'chat_id' => $chat_id,
                    'text' => "Teskari aloqa uchun:\n@tirik_chilik",
                    'reply_markup' => $encodedKeyboard,
                ]
                ]);
            }
            public function yetkazib_berish(int $chat_id){
    
                $keyboard = [
                    'keyboard' => [
                        [['text' => '✍️ Izoh qoldirish']],
                        [['text' => '🚀 Yetkazib berish shartlari'],['text' => '☎️  Kontaktlar']],
                        [['text' => '🏠 Bosh menyu']],
                    ],
                    'resize_keyboard' => true,
                    'one_time_keyboard' => true,
                ];
                $encodedKeyboard = json_encode($keyboard);
     
                $this->http->post("sendMessage",[
                    "form_params" => [
                        'chat_id' => $chat_id,
                        'text' => "Yetkazib berish shartlari:\nO'zbekiston bo'ylab yetkazib berish 2-5 ish kuni ichida amalga oshiriladi. \n\nToshkent bo'ylab yetkazib berish - 20 000 so'm.\nO‘zbekiston bo'ylab yetkazib berish - 30 000 so‘m.\n\n450 000 so'mdan ortiq buyurtmalarni yetkazib berish - tekin!",
                        'reply_markup' => $encodedKeyboard,
                    ]
                    ]);
                }
                public function izoh_qoldirish(int $chat_id){
    
                    $keyboard = [
                        'keyboard' => [
                            [['text' => '😊Menga hamma narsa yoqdi, 5 ❤️'],['text' => '☺️Yaxshi, 4 ⭐️⭐️⭐️⭐️']],
                            [['text' => "😐Qo'niqarli, 3⭐️⭐️⭐️"],['text' => '☹️Yoqmadi, 2 ⭐️⭐️']],
                            [['text' => '😤Men shikoyat qilmoqchiman 👎🏻']],
                            [['text' => '🏠 Bosh menyu']],
                        ],
                        'resize_keyboard' => true,
                        'one_time_keyboard' => true,
                    ];
                    $encodedKeyboard = json_encode($keyboard);
         
                    $this->http->post("sendMessage",[
                        "form_params" => [
                            'chat_id' => $chat_id,
                            'text' => "✅ Tirikchilik loyihasini tanlaganingiz uchun rahmat.\nBizning xizmatlarimiz sifatini yaxshilashga yordam bersangiz juda xursand bo’lar edik :)\nBuning uchun 5 ballik tizim asosida bizni baholang yoki o'z tilaklaringizni yozib jo'nating.",
                            'reply_markup' => $encodedKeyboard,
                        ]
                        ]);
                    }
                    public function izoh_alo(int $chat_id){
        
                        $keyboard = [
                            'keyboard' => [
                                [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                                [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                            ],
                            'resize_keyboard' => true,
                            'one_time_keyboard' => true,
                        ];
                        $encodedKeyboard = json_encode($keyboard);
                        $this->http->post("sendMessage",[
                            "form_params" => [
                                'chat_id' => $chat_id,
                                'text' => "Mamnun qolganingizdan xursandmiz 😊.\nSiz va yaqinlaringizni har doim xursand qilishga harakat qilamiz 🤗",
                                'reply_markup' => $encodedKeyboard,
                            ]
                            ]);
                        }
                        public function izoh_yaxshi(int $chat_id){
        
                            $keyboard = [
                                'keyboard' => [
                                    [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                                    [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                                ],
                                'resize_keyboard' => true,
                                'one_time_keyboard' => true,
                            ];
                            $encodedKeyboard = json_encode($keyboard);
                            $this->http->post("sendMessage",[
                                "form_params" => [
                                    'chat_id' => $chat_id,
                                    'text' => "Sizga yoqqanidan xursandmiz 😊. Bot ishlashini yaxshilash uchun qanday maslahatlaringiz bor?👇🏻",
                                    'reply_markup' => $encodedKeyboard,
                                ]
                                ]);
                            }
                        public function qoniqarli(int $chat_id){
    
                            $keyboard = [
                                'keyboard' => [
                                    [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                                    [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                                ],
                                'resize_keyboard' => true,
                                'one_time_keyboard' => true,
                            ];
                            $encodedKeyboard = json_encode($keyboard);
                            $this->http->post("sendMessage",[
                                "form_params" => [
                                    'chat_id' => $chat_id,
                                    'text' => "Botimiz sizni qoniqtirmaganidan afsusdamiz 😔. \nBizni yaxshilashga yordam bering, \nsharh va takliflaringizni qoldiring👇🏻. \nYaxshilashga harakat qilamiz🙏🏻.",
                                    'reply_markup' => $encodedKeyboard,
                                ]
                                ]);
                            }
                        public function yomon(int $chat_id){

                            $keyboard = [
                                'keyboard' => [
                                    [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                                    [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                                ],
                                'resize_keyboard' => true,
                                'one_time_keyboard' => true,
                            ];
                            $encodedKeyboard = json_encode($keyboard);
                            $this->http->post("sendMessage",[
                                "form_params" => [
                                    'chat_id' => $chat_id,
                                    'text' => "Botimiz sizni qoniqtirmaganidan afsusdamiz 😔. Bizni yaxshilashga yordam bering, sharh va takliflaringizni qoldiring👇🏻. Yaxshilashga harakat qilamiz🙏🏻",
                                    'reply_markup' => $encodedKeyboard,
                                ]
                                ]);
                            }
                        public function shikoyat(int $chat_id){
                            $keyboard = [
                                'keyboard' => [
                                    [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                                    [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                                ],
                                'resize_keyboard' => true,
                                'one_time_keyboard' => true,
                            ];
                            $encodedKeyboard = json_encode($keyboard);
                            $this->http->post("sendMessage",[
                                "form_params" => [
                                    'chat_id' => $chat_id,
                                    'text' => "Botimiz sizni qoniqtirmaganidan afsusdamiz 😔. Bizni yaxshilashga yordam bering, sharh va takliflaringizni qoldiring👇🏻. Yaxshilashga harakat qilamiz🙏🏻",
                                    'reply_markup' => $encodedKeyboard,
                                ]
                                ]);
                            }
                        public function savat(int $chat_id){
                            $keyboard = [
                                'keyboard' => [
                                    [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                                    [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                                ],
                                'resize_keyboard' => true,
                                'one_time_keyboard' => true,
                            ];
                            $encodedKeyboard = json_encode($keyboard);
                            $this->http->post("sendMessage",[
                                "form_params" => [
                                    'chat_id' => $chat_id,
                                    'text' => "Savatingiz:\n\nJami: 0 UZS",
                                    'reply_markup' => $encodedKeyboard,
                                ]
                                ]);
                            }
                        public function mahsulotlar(int $chat_id){
                            // $keyboard = [
                            //     'keyboard' => [
                            //         [['text' => '🚖 Buyurtma berish'],['text' => '📥 Savat']],
                            //         [['text' => 'tchk'],['text' => "Troll.uz"],['text' => "Timur Alihonov"]],
                            //         [['text' => 'Konsta'],['text' => "Go uz"],['text' => "#ЧЗХ"]],
                            //         [['text' => 'Subyektiv'],['text' => "Shahzoda"],['text' => "Chumoli"]],
                            //         [['text' => '🏠 Bosh menyu']],
                            //     ],
                            //     'resize_keyboard' => true,
                            //     'one_time_keyboard' => true,
                            // ];
                            $keyboard = [
                                'keyboard' => [
                                    [['text' => '🚖 Buyurtma berish'],['text' => '📥 Savat']],
                                    [['text' => 'Subyektiv'],['text' => "Chumoli"]],
                                    [['text' => '🏠 Bosh menyu']],
                                ],
                                'resize_keyboard' => true,
                                'one_time_keyboard' => true,
                            ];
                            $encodedKeyboard = json_encode($keyboard);
                            $this->http->post("sendMessage",[
                                "form_params" => [
                                    'chat_id' => $chat_id,
                                    'text' => "Bo'limni tanlang 👇🏻",
                                    'reply_markup' => $encodedKeyboard,
                                ]
                                ]);
                            }
                        public function chumoli(int $chat_id){
                            $keyboard = [
                                'keyboard' => [
                                    [['text' => '⬅️ Ortga']],
                                    [['text' => '🚖 Buyurtma berish'],['text' => "📥 Savat"]],
                                    [['text' => 'Futbolkalar']],
                                    [['text' => '🏠 Bosh menyu']],
                                ],
                                'resize_keyboard' => true,
                                'one_time_keyboard' => true,
                            ];
                            $encodedKeyboard = json_encode($keyboard);
                            $this->http->post("sendMessage",[
                                "form_params" => [
                                    'chat_id' => $chat_id,
                                    'text' => "Bo'limni tanlang👇🏻",
                                    'reply_markup' => $encodedKeyboard,
                                ]
                                ]);
                            }
                            public function subyektiv(int $chat_id){
                                $keyboard = [
                                    'keyboard' => [
                                        [['text' => '⬅️ Ortga']],
                                        [['text' => '🚖 Buyurtma berish'],['text' => "📥 Savat"]],
                                        [['text' => 'Futbolkalar']],
                                        [['text' => '🏠 Bosh menyu']],
                                    ],
                                    'resize_keyboard' => true,
                                    'one_time_keyboard' => true,
                                ];
                                $encodedKeyboard = json_encode($keyboard);
                                $this->http->post("sendMessage",[
                                    "form_params" => [
                                        'chat_id' => $chat_id,
                                        'text' => "Bo'limni tanlang👇🏻",
                                        'reply_markup' => $encodedKeyboard,
                                    ]
                                    ]);
                                }                            
                            public function orqaga(int $chat_id){
                                $keyboard = [
                                    'keyboard' => [
                                        [['text' => '🔥 Maxsulotlar'],['text' => '📥 Savat']],
                                        [['text' => '💼 Hamkorlik'],['text' => "ℹ️ Ma'lumot"]],
                                        [['text' => '🌐 Tilni tanlash']],
                                    ],
                                    'resize_keyboard' => true,
                                    'one_time_keyboard' => true,
                                ];
                                $encodedKeyboard = json_encode($keyboard);
                                $this->http->post("sendMessage",[
                                    "form_params" => [
                                        'chat_id' => $chat_id,
                                        'text' => "Savatingiz:\n\nJami: 0 UZS",
                                        'reply_markup' => $encodedKeyboard,
                                    ]
                                    ]);
                                }

                        }