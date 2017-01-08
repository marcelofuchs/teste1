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

    /**
     * Retorno da configuração de rotas.
     * @global \App\type $routes
     */
    public static function routes() {
        global $routes;
    }

    /**
     * Seleciona a classe que deve ser iniciada de acordo com a rota.
     * @global type $routes
     * @param type $route
     * @return type
     */
    public function getClass($route = "/") {
        global $routes;
        $var = explode("@", $routes[$route]);
        return $var[0];
    }

    /**
     * Método a ser executado de acordo com a rota.
     * @global \App\type $routes
     * @param type $route
     * @return type
     */
    public function getAction($route = "/") {
        global $routes;
        $var = explode("@", $routes[$route]);
        return $var[1];
    }

    /**
     * Retorna a rota atual.
     * @return type
     */
    public static function actual() {
        return Request::server('REQUEST_URI');
    }

    /**
     * Redireciona para url.
     * @param type $location - patch aplication
     */
    public static function redirect($location) {
        header('Location: ' . $location);
        exit;
    }

}
