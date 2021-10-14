<?php 

namespace App\Controller;

use \App\Utils\View;

class AppController{

    public static function getPage($content){
        return View::render('layout/index', [
            'content' => $content
        ]);
    }
}


