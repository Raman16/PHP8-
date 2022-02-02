<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;
use PDOException;

class HomeController
{

    public function index(): View
    {

        try {
            $db = new PDO(
                'mysql:host=db;dbname=my_db',
                'root',
                'root',
                []
            );

            //Insert Query:
            $query = "INSERT INTO users(email,full_name,is_active,created_at)
                          VALUES(:email,:name,:active,:date)";
            $email     = 'white@gmail.com';
            $name      = "john";
            $isActive  = 1;
            $createdAt = date('Y-m-d H:m:i', strtotime('07/11/2021 9:00PM'));

            $stmt =  $db->prepare($query);
            // $stmt->execute([
            //     'name' => $name,
            //     'email' => $email,
            //     'active' => $isActive,
            //     'date' => $createdAt
            // ]);

            $stmt->bindValue(':name',$name);
            $stmt->bindValue(':email',$email);
            $stmt->bindParam(':active',$isActive,PDO::PARAM_BOOL);
            $stmt->bindValue(':date',$createdAt);
            $stmt->execute();

            $id = (int)$db->lastInsertId();

            $user = $db->query("select * from users where id =" . $id)->fetch();
            echo '<pre>';
            print_r($user);
            echo '</pre>';
        } catch (PDOException $e) {
            echo '<pre>';
            print_r($e->getMessage());
        }
        return View::make('index');
    }
}
