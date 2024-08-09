<?php

Router::get('/',fn() => require 'view/pages/home.php');
Router::get('/blogers',fn() => require 'view/pages/blogers.php');
Router::get('/products',fn() => require 'view/pages/products.php');
Router::post("/productsAdd", fn() => (new Task())->createProduct($_POST['bloger_id'],$_POST['name'],$_POST['price'],$_POST['color'],$_POST['size']));
Router::get("/products&delete",fn() => (new Task())->deleteProduct($_GET['id']));

Router::post('/blogersAdd',fn ()=> (new Task())->createBloger($_POST['name']));
Router::get("/blogers&delete", fn() => (new Task())->deleteBloger($_GET['id']));

Router::get('/savat',fn() => require 'view/pages/savat.php');