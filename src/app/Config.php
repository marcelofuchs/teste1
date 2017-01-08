<?php

namespace App;

/**
 * Classe para controle de login e sessao.
 *
 * @author marcelo
 */
class Config {
    
    /**
     * Retorna a configuracao completa atual.
     * @global type $config
     * @return type
     */
    public static function config() {
        global $config;
        return $config;
    }

    /**
     * Retorna as configuracoes de database
     * @param string $key
     * @param array $default
     * @return array
     */
    public static function database($key = null, $default = null) {
        $config = self::config();
        return($key ? $config['database'][$key] : $config['database'] );
    }
    
    /**
     * Retorna toda a configuracao twig ou chave em especifico.
     * @param string $key
     * @param array $default
     * @return array
     */
    public static function twig($key = null, $default = null) {
        $config = self::config();
        return($key ? $config['twig'][$key] : $config['twig'] );
    }

}
