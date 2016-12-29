<?php
namespace App\Controllers;

/**
 * Controler responsavel pela exibição da pagina principal.
 *
 * @author marcelo
 */
class HomeController extends Controller {
    
    /**
     * Página inicial do sistema.
     * @return string Result
     */
    public function index(){
        $nome = 'marcelo';
        return $this->render('index.html', compact('nome'));
    }
}
