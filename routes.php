<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 01/03/2018
 * Time: 14:41
 */

$router->get('','PagesController@index');
$router->get('index','PagesController@index');
$router->get('register', 'UserController@register');
$router->post('add_user', 'UserController@addUser');

$router->get('search','UserController@search');