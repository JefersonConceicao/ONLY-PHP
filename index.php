<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Controller\HomeController as Home; 

$objRequest = new App\Http\Request;

exit;
echo Home::index();