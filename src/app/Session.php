<?php

namespace App;

/**
 * Interpreta e recupera configuracoes do sistema.
 *
 * @author marcelo
 */
class Session {
    
    /**
     * Atribui um valor a variavel de sessao.
     * @param string $key
     * @param mixed $value
     */
    public static function set($key, $value) {
        Session::start();
        $_SESSION[$key] = serialize($value);
    }
    
    /**
     * Retorna valor atribuido a sessao
     * @param string $key
     * @return mixed
     */
    public static function get($key, $default=null) {        
        Session::start();
        if(!isset($_SESSION[$key])){
            return $default;
        }
        return unserialize($_SESSION[$key]);
    } 
 
    /**
     * inicia sessao.
     */
    public static function start(){
        if(!isset($_SESSION)){
            @session_start();
        }
    }
}
