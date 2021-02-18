<?php

/**
 * @package     MRH FORM Project
 * @author      Boris ASSOI
 * @copyright   Copyright (c) 2020, Purine Consulting
 * @link        https://purineconsulting.com
 */

require 'vendor/autoload.php';

$router = new AltoRouter();

$router->addRoutes(array(
    /**
     * Login
     */
    array('GET', '/login/', function () {
        require __DIR__ . '/views/login/index.php';
    }, 'login'),
    array('GET', '/logout/', function () {
        require __DIR__ . '/views/login/index.php';
    }, 'logout'),

    /**
     * Menu
     */
    array('GET', '/', function () {
        require __DIR__ . '/views/dashboard/index.php';
    }, 'home'),
    array('GET', '/subscription/', function () {
        require __DIR__ . '/views/subscription/index.php';
    }, 'subscription'),
    array('GET', '/subscriber/', function () {
        require __DIR__ . '/views/subscriber/index.php';
    }, 'subscriber'),
    array('GET', '/payment/', function () {
        require __DIR__ . '/views/payment/index.php';
    }, 'payment'),
    array('GET', '/settings/', function () {
        require __DIR__ . '/views/settings/index.php';
    }, 'settings'),
    array('GET', '/user/', function () {
        require __DIR__ . '/views/user/index.php';
    }, 'user')
));

$match = $router->match();

if ($match) {
    $_GET = $match['params'];
}

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
