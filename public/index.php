<?php
    require_once __DIR__."/../vendor/autoload.php";

use App\Controllers\Controller;
use App\Controllers\HomeController;
use App\Router;


    Router::get('/', function(){
        echo "HOME PAGE";
    });

    Router::get('/contact', function(){
        echo "CONTACT PAGE";
    });

    Router::get('/about-us', function(){
        echo "ABOUT US";
    });

    Router::post('/contact', function(){
        echo "Contact Page method POST";
    });

    Router::get('/home', [HomeController::class, 'index']);
    

    Router::run();

?>