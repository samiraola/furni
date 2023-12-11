<?php

$uri = $_SERVER['REQUEST_URI'];
switch ($uri){
    case "/": require('controllers/index.php');
    break;
    case "/about": require('controllers/about.php');
    break;
    case "/blog": require('controllers/blog.php');
    break;
    case "/cart": require('controllers/cart.php');
    break;
    case "/checkout": require('controllers/checkout.php');
    break;
    case "/contact": require('controllers/contact.php');
    break;
    case "/services": require('controllers/services.php');
    break;
    case "/shop": require('controllers/shop.php');
    break;
    case "/thankyou": require('controllers/thankyou.php');
    break;
    
}


?>