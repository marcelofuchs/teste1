<?php

namespace App\Requests;

/**
 * Classe responsavel em recuperar valores de request , variaveis globais e url amigável.
 *
 * @author marcelo
 */
abstract class Request {

    /**
     * Retorna valores da variavel server.
     * 
     * @param string $key - chave especifica para a variavel server. mantendo nulo retorna array server.
     * @return mixed
     */
    public static function server($key=null) {
        if($key)
            return $_SERVER[$key];
        
        return $_SERVER;
    }

    
}
