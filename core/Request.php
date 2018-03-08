<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 01/03/2018
 * Time: 14:53
 */

namespace core;


class Request {

    public static function uri() {

        return trim(\parse_url($_SERVER['REQUEST_URI'],\PHP_URL_PATH),'/');
    }

    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }

}