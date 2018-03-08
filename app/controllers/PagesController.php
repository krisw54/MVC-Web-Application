<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 08/03/2018
 * Time: 15:10
 */

namespace mvcwebsite\controllers;

class PagesController {

    public function index() {
        $title = 'Home Page';
        return view('index',\compact('title'));
    }



}