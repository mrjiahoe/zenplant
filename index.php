<?php

    // Location of your site which contains route.php
    $site_url = 'http://localhost/zenplant';
    
    //          HTTP protocol + Server address(localhost or example.com) + requested uri (/route or /route/home)
    $current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    // Current URL = http://localhost/route/something
    // Site URL - http://localhost/route
    
    // Requested page = Current URL - Site URL
    // Requested page = something
    $request = str_replace($site_url, '', $current_url);
    
    // Replacing extra back slash at the end
    $request = str_replace('/', '', $request);
    
    // Converting the request to lowercase
    $request = strtolower($request);
    
    // Check if the request is for the admin area
    $isAdminRequest = strpos($request, 'admin') === 0;
    
    if ($isAdminRequest) {
        switch($request){
            case 'admin':
                require 'admin/homeDash.php';
                break;
            case 'admin/logout':
                require 'logout.php';
                break;
            case 'admin/insert':
                require 'admin/insert.php';
                break;
            default:
                require 'admin/admin404.php';
        }
    } else {
        switch($request){
            case 'home':
            case '':
                require 'user/views/home.php';
                break;
            case 'about':
                require 'user/page/about.php';
                break;
            case 'contact':
                require 'user/views/contact.php';
                break;
            case 'products':
                require 'user/views/allProducts.php';
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
            case'register':
                require 'user/page/register.php';
                break;
            case 'test':
                require 'user/page/test.php';
                break;
            case preg_match('/^test\?(id=\d+)?$/', $request):
                    require 'user/page/test.php';
                    // Access the id parameter using $_GET['id']
                    if(isset($_GET['id'])) {
                        $testId = $_GET['id'];
                      // Use the $testId variable in your test.php logic
                    }
                    break;
            default:
                require 'user/views/404.php';
        }
    }