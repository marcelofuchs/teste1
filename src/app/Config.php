<?php

namespace App;

/**
 * Interpreta e recupera configuracoes do sistema.
 *
 * @author marcelo
 */
class Config {
    
    public static function config() {
        global $config;
        return $config;
    }

    public static function database($key = null, $default = null) {
        $config = self::config();
        return($key ? $config['database'][$key] : $config['database'] );
    }

}
