<?php
if (file_exists('foo.txt')) {

    echo filesize('foo.txt');//12
    file_put_contents('foo.txt', "Hello World!");
    echo filesize('foo.txt');//12

    clearstatcache(); //Clears file status cache


} else {
    echo 'File Not Found!';
}
