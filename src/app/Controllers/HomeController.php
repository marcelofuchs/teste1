<?php
namespace App\Controllers;
use App\Entities\Tag;
/**
 * Controler responsavel pela exibição da pagina principal.
 *
 * @author marcelo
 */
class HomeController extends Controller {
    
    public $middlewares = [ 'Auth' ];
    /**
     * Página inicial do sistema.
     * @return string Result
     */
    public function index(){
        $nome = 'marcelo';
        print_r(Tag::find(1));
        return $this->render('index.html', compact('nome'));
    }
}
