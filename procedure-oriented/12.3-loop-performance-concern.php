<?php

$name = ['R', 'A', 'M', 'A', 'N'];
for ($i = 0, $length = count($name); $i < $length; $i++) {
    echo $name[$i];
}
//RAMAN
//Note:ABOVE CODE HAS BETTER PERFORMANCE THAN BELOW

echo '<br>';
//OR
for ($i = 0; $i < count($name); $i++) {
    echo $name[$i];
}
//RAMAN