<?php

$role = 'admin';
$message = '';

switch ($role) {
    case 'admin':
        $message = 'Welcome, admin!';
        break;
    case 'editor':
        $message = 'Welcome! You have some pending articles to edit';
        break;
    case 'author':
        $message = 'Welcome! Do you want to publish the draft article?';
        break;
    case 'subscriber':
        $message = 'Welcome! Check out some new articles.';
        break;
    default:
        $message = 'You are not authorized to access this page';
}

echo $message; //Welcome, admin!


//Alternative syntax
$role = 'customer'; //$role = 'subscriber';
switch ($role):
    case 'admin':
        $message = 'Welcome, admin!';
        break;
    case 'editor':
        $message = 'Welcome! You have some pending articles to edit';
        break;
    case 'author':
        $message = 'Welcome! Do you want to publish the draft article?';
        break;

    case 'customer': //works, its is like customer or subscriber
    case 'subscriber':
        $message = 'Welcome! Check out some new articles.';
        break;
    default:
        $message = 'You are not authorized to access this page';
endswitch;

echo $message; //Welcome! Check out some new articles.


$status = '1';
switch ($status):
    case 1:
        echo "1"; //1 (DOES LOOSE COMPARISON) '1'==1
        break;
    case 2:
        echo "2";
        break;
    default:
        echo "default";
endswitch;
