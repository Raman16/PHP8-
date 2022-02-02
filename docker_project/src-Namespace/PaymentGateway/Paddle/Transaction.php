<?php

declare(strict_types=1);

namespace PaymentGateway\Paddle;


class Transaction
{

    public function __construct()
    {
        //Below we did not specify the fully qualified
        //class name new \PaymentGateway\Paddle\CustomerProfile()
        //and we did not imported it since CustomerProfile is
        //in the same Namespace, and it will look with in it and found
        echo '<br>';
        var_dump(new CustomerProfile());  
       //object(PaymentGateway\Paddle\CustomerProfile)#2 (0) { }

        //Below code gives an error since it is not located within same Namespace
        //Undefined function 'PaymentGateway\Paddle\DateTime'
        //var_dump(new DateTime());
        echo '<br>';

        //Below code is a valid one, since it look into the Global Namespace
        //and finds the DateTime() class
        var_dump(new \DateTime());
        //object(DateTime)#2 (3) { ["date"]=> string(26) "2021-12-16 09:26:16.491383"
        // ["timezone_type"]=> int(3) ["timezone"]=> string(3) "UTC" }

        echo '<br>';

        //var_dump(new Notifications\Email());error

        //The namespace \Notifications\Email() is  a fully qualified name.
        var_dump(new \Notifications\Email());
        //object(Notifications\Email)#2 (0) { }

        echo '<br>';

        //Below explode() function first it looks in local namespace, 
        //if it is found then it will execute from local namespace, 
        //if it is not found then it will look into global name space and 
        //execute the code from builtin function of php.
        var_dump(explode(',', 'Hello,World'));
        echo '<br>';
       //string(3) "foo"

        var_dump(\explode(',', 'Hello,World'));
        //array(2) { [0]=> string(5) "Hello" [1]=> string(5) "World" }

        echo '<br>';
        //WHEREAS FOR CLASSES, PHP WILL TRY TO LOCATE THEM FROM A 
        //LOCAL NAMESPACE, IF IT IS NOT FOUND THEN IT WILL DIRECTLY
        //THROW AN ERROR.
        //

    }
}

function explode($separator, $str){
    return 'foo';
}

//Note: '\' can also be used to have speeding performance(negligible)
//to import from gobal namespace \explode()