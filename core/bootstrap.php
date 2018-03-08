<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 08/03/2018
 * Time: 15:10
 */

require '../vendor/autoload.php';

function view($view, $data=[]) {
    extract($data);
    return  require __DIR__ . "/../app/views/{$view}.view.php";
}