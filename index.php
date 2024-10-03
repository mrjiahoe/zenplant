<?php
    require_once('route.php');

    function home(){
        require 'user/views/home.php';
    }

    function about_us(){
        require 'user/about.php';
    }

    function contact(){
        require 'user/views/contact.php';
    }

    function page404(){
        // die('Page not found. Please try some different url.');
        require 'user/views/404.php';
    }

    //If url is http://localhost/route/home or user is at the maion page(http://localhost/route/)
    if($request == 'home' or $request == '')
        home();
    //If url is http://localhost/route/about-us
    else if($request == 'about')
        about_us();
    //If url is http://localhost/route/contact-us
    else if($request == 'contact')
        contact();
    else if($request == 'headers')
        require 'user/components/header.php';
    //If user entered something else
    else
        page404();
?>