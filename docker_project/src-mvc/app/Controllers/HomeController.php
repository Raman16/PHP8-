<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function indexold(): string
    {
        //without __toString()
        return View::make('index')->render();

        //return View::make('index');
    }
    public function index(): View
    {
        ///with __toString()
        //return (new View('index'))->render();
        return View::make('index',['foo'=>'bar']);

        //return View::make('index');
    }

    public function download()
    {
        header('Content-Type:application/pdf');
        header('Content-Disposition:attachment; filename="myticket.pdf"');
        readfile(STORAGE_PATH . '/ticket.pdf');
    }

    public function upload()
    {
        echo '<pre>';
        var_dump($_FILES);
        var_dump(pathinfo($_FILES['receipt']['tmp_name']));
        move_uploaded_file(
            $_FILES['receipt']['tmp_name'],
            STORAGE_PATH . '/' . $_FILES['receipt']['name']
        );

        header('Location:/');
    }
}
