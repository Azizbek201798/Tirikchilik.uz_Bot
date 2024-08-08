<?php

Router::get('/',fn() => require 'view/pages/home.php');
Router::get('/blogers',fn() => require 'view/pages/blogers.php');
Router::get('/products',fn() => require 'view/pages/products.php');
Router::get('/savat',fn() => require 'view/pages/savat.php');

