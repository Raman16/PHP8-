<?php
//Working with FileSystem

$dir = scandir(__DIR__);
echo '<pre>';
var_dump($dir);
// array(71) {
//     [0]=>
//     string(1) "."
//     [1]=>
//    ....
//   [69]=>
//    string(16) "9-expression.php"
//    [70]=>
//    string(6) "public"
//  }  

var_dump(is_dir($dir[70])); //bool(true)
var_dump(is_dir($dir[69]));//bool(false)

