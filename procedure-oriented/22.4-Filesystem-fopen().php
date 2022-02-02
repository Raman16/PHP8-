<?php

if (!file_exists('foo.txt')) {
    echo 'File Not Found!';
    return;
}

$file = fopen('foo.txt', 'r');

while (($line = fgets($file)) !== false) {
    print_r($line);
}
//Hello World1!
fclose($file);

if (!file_exists('foo1.txt')) {
    echo 'File Not Found';
}
$file2 = fopen('foo1.txt', 'r');
while (($line = fgetcsv($file2)) !== false) {
    print_r($line);
}
//Array ( [0] => a [1] => b [2] => c )
//Array ( [0] => d [1] => e [2] => f )
fclose($file2);
