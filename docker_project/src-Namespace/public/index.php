<?php

declare(strict_types=1);
require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../Notifications/Email.php';

use PaymentGateway\Paddle\{Transaction,CustomerProfile};


var_dump(new Transaction());
var_dump(new CustomerProfile());

//object(PaymentGateway\Paddle\Transaction)#1 (0) { }