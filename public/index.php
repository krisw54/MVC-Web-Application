<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 08/03/2018
 * Time: 15:10
 */

require '../core/bootstrap.php';
use core\Router;
use core\Request;
use mvcwebsite\controllers\ErrorController;

try {
    Router::load('../routes.php')->direct(Request::uri(),Request::method());
} catch (Exception $e) {
    //require('../app/controllers/error-page.php');
    $err = new ErrorController();
    $err->error();
}