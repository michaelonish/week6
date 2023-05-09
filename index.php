<?php
/*
    Michael Onishchenko
    4/18/23
    328/diner/index.php
    controller for diner project

 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//create an F3 (F3: fat-free-framework) object

$f3 = Base::instance();

//run fat free

// ' -> '  used to invoke instance method in php

$f3->route('GET /', function () {
    //echo '<h1> HELLO WORLD! </h1>';

    //Display a view page
    $view = new Template();
    echo $view->render('views/info.html');

});


// Run Fat-Free
$f3->run();