<?php

if (!file_exists('foo.txt')) {
    echo 'File Not FOund!';
}
$content = file_get_contents('foo.txt');
echo $content;

file_put_contents('foo.txt', "HEY Programmer!", FILE_APPEND);
$content = file_get_contents('foo.txt');
echo $content;
