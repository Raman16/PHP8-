<?php

//Create and Remove Directory:
mkdir('foo');
rmdir('foo');

//Create Director and Remove Directory recursively:
$structure = './depth1/depth2/depth3/';
if (!mkdir($structure, 0777, true)) {
    die('Failed to create directories...');
}
rmdir('./depth1/depth2/depth3/');
