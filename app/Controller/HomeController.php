<?php 
namespace App\Controller;

use \App\Controller\AppController;
use \App\Utils\View;

class HomeController extends AppController{

    public static function index(){
        $content = View::render('home/index', [
            'name' => 'Jeferson',
            'age' => 20
        ]);

        return parent::getPage($content);
    }
}
