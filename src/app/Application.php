<?php

namespace App;

use App\Requests\Request;
use App\Route;
use App\Config;
use Illuminate\Database\Capsule\Manager as Capsule;

/*
 * Classe responsavel por receber e executar as requisições.
 *
 * @author marcelo
 */

class Application {

    public $route;

    public function __construct() {
        Session::start();
        $this->prepareDatabase();
        $this->route = new Route();
    }

    /**
     * Start inicial da aplicacao.
     */
    public function run() {
        $class = $this->route->getClass(Route::actual());
        $action = $this->route->getAction(Route::actual());
        eval('$object = new App\\Controllers\\' . $class . '();');
        if($object->middlewares){
            $this->execMiddlewares($object->middlewares);
        }
        self::showResult($object->$action());
    }
    
    protected function execMiddlewares($arrMiddlewares){
        foreach ($arrMiddlewares as $class){
            eval('$mid = new App\\Middleware\\' . $class . '();');
            $mid->run();
        }
    }

    /**
     * apresenta resultado do processamento.
     * @param mixed $result -  Resposta do controller
     * @return boolean - resultado exibido.
     */
    protected static function showResult($result) {
        echo $result;
        return true;
    }

    /**
     * adiciona conexao padrao do sistema.
     */
    protected function prepareDatabase() {
        $capsule = new Capsule;
        $capsule->addConnection(Config::database());
        $capsule->setAsGlobal();
        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
    }

}
