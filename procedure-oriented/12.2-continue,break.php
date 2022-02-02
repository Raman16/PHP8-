<?php

//break ;
$i = 0;
while (true) {
    if ($i == 5) {
        break;
    }
    echo $i; //0 1 2 3 4
    $i++;
}

echo '<br>';

//continue ; 
do {
    $i++;
    if ($i == 5 || $i == 6) {
        continue;
    }
    echo $i; //7 8 9 10 
} while ($i < 10);
    