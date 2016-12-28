<?php

/* 
 * Dados de configuracao do sistema.
 */
$GLOBALS['config'] = 
        [
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
