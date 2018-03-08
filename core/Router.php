<?php
/**
 * Created by PhpStorm.
 * User: Kris
 * Date: 01/03/2018
 * Time: 14:27
 */

namespace core;


class Router {

    private $routes = [
                        'GET'=>[],
                        'POST'=>[]
                      ];

    public function define(array $routes) {
        $this->routes = $routes;
    }

    public static function load (string $file) {
        $router = new static();
        require $file;
        return $router;

    }

    public function get ($uri ,$route) {
        $this->routes['GET'][$uri] = $route;

    }

    public function post ($uri ,$route) {
        $this->routes['POST'][$uri] = $route;

    }

    public function direct(string $uri, string $method) {
        $uri = \strtolower($uri);

        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->callAction(...\explode('@',$this->routes[$method][$uri]));
        }
            throw new \Exception($uri . ' resource could not be found');
    }

    private function callAction($controller, $action) {
        $controller = "mvcwebsite\controllers\\" .$controller;
        $controller = new $controller();
        if(\method_exists($controller,$action)){
            return $controller->$action();
        }
    }
}