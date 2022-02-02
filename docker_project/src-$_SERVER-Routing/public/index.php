<?php
require_once __DIR__ . '/../vendor/autoload.php';

$router =  new App\Router();
// $router->register('/', function () {
//     echo 'Home';
// });
// $router->register('/invoices', function () {
//     echo 'Invoices';
// });



$router->register('/', [App\Classes\Home::class, 'index'])
    ->register('/invoices', [App\Classes\Invoices::class, 'index'])
    ->register('/invoices/create', [App\Classes\Invoices::class, 'create']);

echo $router->resolve($_SERVER['REQUEST_URI']);
