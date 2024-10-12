<?php
    require_once('route.php');


    //If url is http://localhost/route/home or user is at the maion page(http://localhost/route/)
    // if($request == 'home' or $request == '')
        // home();
    //If url is http://localhost/route/about-us
    // else if($request == 'about')
        // about_us();
    //If url is http://localhost/route/contact-us
    // else if($request == 'contact')
    //     contact();
    // else if($request == 'headers')
    //     require 'user/components/header.php';
    // else if($request == 'login')
    //     require 'user/page/login.php';
    // else if($request == 'logout')
    //     require 'user/page/logout.php';
    // else if($request == 'register')
    //     require 'user/page/register.php';
    // else if($request == 'adminpage')
    //     require 'admin/index.php';
    // //If user entered something else
    // else
    //     page404();

        switch($request){
            case 'home':
                require 'user/views/home.php';
                break;
            case 'about':
                require 'user/page/about.php';
                break;
            case 'contact':
                require 'user/views/contact.php';
                break;
            case 'headers':
                require 'user/components/header.php';
                break;
            case 'login':
                require 'user/page/login.php';
                break;
            case 'logout':
                require 'user/page/logout.php';
                break;
            case 'admin/logout':
                require 'admin/logout.php';
                break;
            case'register':
                require 'user/page/register.php';
                break;
            case 'adminfront':
                require 'admin/homeDash.php';
                break;
            case 'admin/insert':
                require 'admin/insert.php';
                break;
            default:
                require 'user/views/404.php';
        }
