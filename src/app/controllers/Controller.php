<?php
namespace App\Controllers;
/*
 * Controler principal para o qual todos os outros controllers extendem.
 */
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Config;
use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 * Controler base
 *
 * @author marcelo
 */
class Controller {
    
    /**
     * @var object Twig_Environment
     */
    protected $twig=null;
    
    /**
     * 
     * @param type $template - nome do arquivo referente ao template ex: 'index.html' referencia o arquivo 'index.html.twig'
     * @param type $data - array com variaveis enviadas ao twig.
     * @return type
     */
    protected function render($template, $data=[]){
        return $this->twig()->render($template.'.twig', $data);
    }   
    
    /**
     * Prepara interface twig;
     * @return object Twig_Enviroment
     */
    private function twig() {
        if($this->twig)
            return $this->twig;
        
        $loader = new Twig_Loader_Filesystem(Config::twig('viewPath'));
        return $this->twig = $twig = new Twig_Environment($loader, array(
            'cache' => Config::twig('compilationPath'),
        ));
    }    
}
