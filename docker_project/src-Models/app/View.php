<?php

declare(strict_types=1);

namespace App;

use ViewNotFoundException;

class View
{
    public function __construct(
        protected $view,
        protected array $params = []
    ) {
    }

    public function render(): bool|string
    {

        $viewPath = VIEW_PATH . '/' . $this->view . '.php';
        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }
        // 
           
        //Below code create variable variable
        foreach($this->params as $key=>$value){
            $$key = $value;
        }
        ob_start();
        include $viewPath;
        return (string) ob_get_clean();
    }


    public static function make(string $view, array $params = []): static
    {
        // echo '<pre>';print_r($params);
        return new static($view, $params);
    }
    public function __toString()
    {
        return $this->render();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}
