<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 08/03/2018
 * Time: 15:10
 */

namespace mvcwebsite\controllers;

class UserController {

    public function register() {
        $title = 'Registration Page';
        return view('register',\compact('title'));
    }

    public function search() {
        $title = 'Search Page';
        $name= $_GET['name'] ?? '';
        return view('search',compact('title','name'));
    }

    public function addUser() {
        var_dump($_POST);
    }
}