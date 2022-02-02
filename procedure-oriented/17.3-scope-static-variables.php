<?php

//static variables:
//If the scope of a function is abandoned, then all variables defined 
//within this function are usually lost. The next time the function is
//called, all local variables must therefore be defined again.
//In order to ensure that certain local variables retain their values 
//over several calls to a function, these can be marked as “static”. 
//After the end of the function, these are not available outside the 
//scope of the function, but the next time they are called they can be
// accessed again within the function – as if the function had not been 
//terminated, but simply started again at the beginning.


function staticVariable()
{
    static $firstLoad = 0;
    $load = 0;
    if ($firstLoad != 0) {
        $firstLoad = $firstLoad + 10; //1 11 21
    } else {
        $firstLoad++; //1
    }
    if ($load == 0) {
        $load++;
    }
    echo "Local  Variable:", $load;
    echo '<br>';
    echo "Static Variable:", $firstLoad;
    echo '<br>';
}

staticVariable();
echo '<br>';
staticVariable();
echo '<br>';
staticVariable();
