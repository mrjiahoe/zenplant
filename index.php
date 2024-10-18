<?php

// Base URL of your site
$site_url = 'http://localhost/zenplant';

// Get the full current URL
$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Extract the requested page
$request = str_replace($site_url, '', $current_url);
$request = trim($request, '/');  // Remove leading and trailing slashes
$request = strtolower($request); // Convert to lowercase

// Check if the request is for the admin area
$isAdminRequest = strpos($request, 'admin') === 0;

if ($isAdminRequest) {
    // Admin section
    handleAdminRoutes($request);
} else {
    // User section
    handleUserRoutes($request);
}

/**
 * Handle routing for admin requests
 */
function handleAdminRoutes($request) {
    // Admin base URL
    $site_url = 'http://localhost/zenplant/admin';
    $current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $request = str_replace($site_url, '', $current_url);
    $request = trim($request, '/');
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
        case 'newuser': // Changed case to lowercase for consistency
            require 'admin/insertUser.php';
            break;
        case 'productlist':
            require 'admin/productlist.php';
            break;
        default:
            require 'admin/admin404.php';
    }
}

/**
 * Handle routing for user requests, including dynamic IDs for 'test' and 'detail' routes
 */
function handleUserRoutes($request) {
    // Dynamic route for 'test' with ID, like 'test/1'
    if (preg_match('/^test\/([0-9]+)$/', $request, $matches)) {
        $id = $matches[1]; // Extract ID
        require 'user/page/test.php';
        exit;
    }

    // Dynamic route for 'detail' with ID, like 'detail/1'
    if (preg_match('/^detail\/([0-9]+)$/', $request, $matches)) {
        $id = $matches[1]; // Extract ID
        require 'user/views/detail.php';
        exit;
    }

    // Static routes
    switch ($request) {
        case '':
        case 'home':
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
