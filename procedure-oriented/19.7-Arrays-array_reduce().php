<?php
//The array_reduce() function sends the values in an array to 
//a user-defined function, and returns a string.

$invoiceItems = [
    ['price' => 10.99, 'qty' => 2, 'item' => 'Perfume'],
    ['price' => 9,     'qty' => 2, 'item' => 'Mobile'],
    ['price' => 8.99,  'qty' => 2, 'item' => 'Shoes'],
    ['price' => 12.99, 'qty' => 3, 'item' => 'Watch'],
    ['price' => 15.99, 'qty' => 5, 'item' => 'Shirt'],

];

$total = array_reduce(
    $invoiceItems,
    fn ($sum, $invoice) => $sum + $invoice['price'] * $invoice['qty'],
    100 //initial value
);
echo $total;//276.88
