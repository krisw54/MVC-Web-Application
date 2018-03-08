<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 08/03/2018
 * Time: 15:09
 */

namespace mvcwebsite\controllers;


class ErrorController {

    public function error() {
        $title = 'Error 404';
        http_response_code(404);
        return view('error404',\compact('title'));
    }

}