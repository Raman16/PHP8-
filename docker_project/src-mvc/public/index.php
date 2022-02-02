<?php

use App\Exceptions\RouteNotFoundException;

require_once __DIR__ . '/../vendor/autoload.php';
session_start();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');


try{

    $router =  new App\Router();

    $router->get('/', [App\Controllers\HomeController::class, 'index'])
    ->post('/upload', [App\Controllers\HomeController::class, 'upload'])
    ->get('/download', [App\Controllers\HomeController::class, 'download'])
    ->get('/invoices', [App\Controllers\InvoicesController::class, 'index'])
    ->get('/invoices/create', [App\Controllers\InvoicesController::class, 'create'])
    ->post('/invoices/create', [App\Controllers\InvoicesController::class, 'store']);


   echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));


}
catch(RouteNotFoundException $e){
    header('HTTP/1.1 404 Page Ledu');
    //or
    //http_response_code(404);
}
