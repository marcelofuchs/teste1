<?php
namespace App\Controllers;
use App\Entities\Tag;
/**
 * Controler responsavel pela exibição da pagina principal.
 *
 * @author marcelo
 */
class AuthController extends Controller {
    
    /**
     * Página inicial do sistema.
     * @return string Result
     */
    public function login(){
        return $this->render('login.html', compact('email'));
    }
}
