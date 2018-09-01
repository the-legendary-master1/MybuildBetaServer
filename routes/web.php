<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/*AUTHINTICATION*/
$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');

/*Data*/
$router->post('/sidebar', 'AdminDataController@sidebar');
$router->post('/home', 'AdminDataController@home');
$router->post('/logos', 'AdminDataController@logos');
$router->post('/seo', 'AdminDataController@seo');
$router->post('/subscribe', 'AdminDataController@subscribe');
$router->post('/header_footer', 'AdminDataController@header_footer');
$router->post('/custom-design-forms', 'AdminDataController@custom_design_forms');
$router->post('/slider', 'AdminDataController@slider');