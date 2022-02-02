<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\RouteNotFoundException;
use PDO;
use PDOException;

class App
{

    private static DB $db;

    public function __construct(
        protected Router $router,
        protected array $request,
        protected Config $config
    ) {
        static::$db = new DB($config->db ?? []);
       
    }

    public static function db(): DB
    {
        return static::$db;
    }
    public function run()
    {
       
        try {
            echo $this->router->resolve(
                $this->request['uri'],
                strtolower($this->request['method'])
            );
           
        } catch (RouteNotFoundException $e) {
            header('HTTP/1.1 404 Page Ledu');
        }
    }
}
