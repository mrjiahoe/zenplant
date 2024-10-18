<?php

// Location of your site which contains route.php
$site_url = 'http://localhost/zenplant';

// HTTP protocol + Server address(localhost or example.com) + requested uri (/route or /route/home)
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
    $site_url = 'http://localhost/zenplant/admin';
    $current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $request = str_replace($site_url, '', $current_url);
    $request = str_replace('/', '', $request);
    $request = strtolower($request);
    switch ($request) {
        case '':
        case 'home':
            require 'admin/index.php';
            break;
        case 'logout':
            require 'admin/logout.php';
            break;
        case 'insert':
            require 'admin/insert.php';
            break;
        case 'userlist':
            require 'admin/userlist.php';
            break;
        case 'newUser':
            require 'admin/insertUser.php';
            break;
        case 'productlist':
            require 'admin/productlist.php';
            break;
        default:
            require 'admin/admin404.php';
    }
} else {
    switch ($request) {
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
        case 'register':
            require 'user/page/register.php';
            break;
        case 'test':
            require 'user/page/test.php';
            break;
        case 'detail':
                require 'user/views/detail.php';
            break;
        default:
            require 'user/views/404.php';
    }
}
