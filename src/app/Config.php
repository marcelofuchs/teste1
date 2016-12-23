<?php

namespace App;

/**
 * Interpreta e recupera configuracoes do sistema.
 *
 * @author marcelo
 */
class Config {

    public static function config() {
        return [
            'database' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'synus', //nome do seu banco de dados
                'username' => 'user', //usuário do mysql
                'password' => 'password', //senha do mysql
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => ''
            ],
            'email' => [
            ],
            'cache' => [
            ]
        ];
    }

    public static function database($key = null, $default = null) {
        $config = self::config();
        return($key ? $config['database'][$key] : $config['database'] );
    }

}
