<?php

namespace App;

use App\Requests\Request;
use App\Controllers\HomeController;

/**
 * Interpreta rotas e valores.
 *
 * @author marcelo
 */
class Route {


    public static function routes() {
        global $routes;
    }

    public function getClass($route="/") {
        global $routes;
        $var = explode("@", $routes[$route]);        
        return $var[0];
    }

    public function getAction($route="/") {
        global $routes;
        $var = explode("@", $routes[$route]);        
        return $var[1];
    }

    public static function actual() {
        return Request::server('REQUEST_URI');
    }

}
