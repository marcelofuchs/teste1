<?php

namespace App;

use App\Requests\Request;
use App\Route;
use Illuminate\Database\Capsule\Manager as Capsule;

/*
 * Classe responsavel por receber e executar as requisições.
 *
 * @author marcelo
 */

class Application {

    public function __construct() {
        $this->prepareDatabase();
        $this->prepareView();
    }

    /**
     * Start inicial da aplicacao.
     */
    public function run() {
        echo Request::server('REQUEST_URI');
    }

    /**
     * adiciona conexao padrao do sistema.
     */
    protected function prepareDatabase() {
        $capsule = new Capsule;
        $capsule->addConnection(Config::database());
        $capsule->bootEloquent();
    }

    protected function prepareView() {
        
    }

}
