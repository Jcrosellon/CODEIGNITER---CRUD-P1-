<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//GROUP ROUTES
$routes->post("userStatus",function($routes){
    $routes->get("show", "UserStatus::index");
    $routes->get("edit/(:num)", "UserStatus::singleUserStatus/$1");
    $routes->get("delete/(:num)", "UserStatus::delete/$1");
    $routes->post("add", "UserStatus::update");
    $routes->post("update", "UserStatus::update");
});
