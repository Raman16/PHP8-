<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\SignUp;
use App\Models\Invoice as ModelsInvoice;
use App\Models\User;
use App\View;

class HomeController
{

    public function index(): View
    {

        $email     = 'ramanBandari@gmail.com';
        $name      = "john";
        $amount    = 25;

        // $db = App::db();

        // $db1 = App::db();
        // $db2 = App::db();
        // var_dump($db===$db1,$db1===$db2,$db===$db2);
        // bool(true) bool(true) bool(true)


        /**
         * Note:Below 
         * $db->beginTransaction,
         * $db->commit(),
         * $db->rollBack(),
         * $db->inTransaction() are not methods of DB class
         * It is of PDO class, Hence we do 'Proxy' inorder to access these 
         * methods using __call() magic method which indeed access PDO object
         * in DB class
         */
        $userModel = new User();
        $invoceModel =  new ModelsInvoice();

        $invoiceId = (new SignUp($userModel, $invoceModel))->register(
            [
                'email' => $email,
                'name' => $name
            ],
            [
                'amount' => $amount
            ]
        );


        return View::make(
            'index',
            ['invoice' => $invoceModel->find($invoiceId)]
        );
    }
}
