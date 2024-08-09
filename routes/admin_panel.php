<?php

Router::get('/',fn() => require 'view/pages/home.php');
Router::get('/blogers',fn() => require 'view/pages/blogers.php');
Router::get('/products',fn() => require 'view/pages/products.php');
Router::get('/savat',fn() => require 'view/pages/savat.php');

Router::post('/blogers',fn ()=> require "controllers/blogger/add.php");
Router::post('/blogers',fn ()=> require "controllers/blogger/delete.php");

// $a = new Task();
// var_dump($a->getByIdProduct(4));
// $a->deleteProduct(3);
// var_dump($a->getAllProduct());
// $a->createProduct(1,'Kepka',50000,"oq",1);
// $a->createProduct(1,'Futbolka',250000,"qora",2);
// var_dump("Qo'shildi......");