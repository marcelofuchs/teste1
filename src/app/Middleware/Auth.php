<?php
namespace App\Middleware;



/**
 * Verifica se usuario esta autenticado ou nao .
 *
 * @author marcelo
 */
class Auth implements MiddlewareInterface{
    public function run() {
        $usuario  = \App\Session::get('usuario');
        if(!$usuario){
            \App\Route::redirect("/login");
            exit;
        }
    }
}
