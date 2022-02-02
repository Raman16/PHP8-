<?php

//BELOW MATCH EXPRESSION CODE
//WORKS ONLY IN PHP 8 AND LATER VERSIONS....

//PHP8 MATCH EXPRESSION
$food = 'cake';
$return_value = match ($food) {
    'apple'         => 'fruit',
    'bar'           => 'chocolate',
    'cake', 'sweat' => 'cake',
    default         => 'Unknow Food'
};
echo $return_value; //cake
var_dump($return_value); //string(4) "cake"


//Match expression vs Switch is:
#match returns the value matched.
#match does need additional 'break' keyword. 
#can have multiple expressions.'cake','sweat' same like in switch
#if no 'default' and no 'match' is found then it leads to error.
#match performs "strict comparison" while switch performs loose comparison
#match can have only one line of code whereas switch can have multiple line
//of code

switch ($food) {
    case 'apple':
        print 'fruit';
        print 'yummy';
        break;
    case 'bar,choco':
        print 'chocolate';
        print 'yummy';
        break;
    case 'cake':
        print 'cake';
        print 'yummy';
        break;
    default:
        print 'no food';
}
//output:
//cakeyummy

