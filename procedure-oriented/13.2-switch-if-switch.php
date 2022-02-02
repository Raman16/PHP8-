<?php

function x()
{
    echo "Done";
    return 1;
}
// $x = x();//called globally
// if ($x == 3) {
//     echo "3";
// } else if ($x == 2) {
//     echo "2";
// } else if ($x == 1) {
//     echo "1";
// }
if (x() == 3) { //called in block
    echo "3";
} else if (x() == 2) {
    echo "2";
} else if (x() == 1) {
    echo "1";
}
//OUTPUT:
//DoneDoneDone1


///NOW USING SWITCH///
switch (x()):
    case 3:
        echo "3";
        break;
    case 2:
        echo "2";
        break;
    case 1:
        echo "1";
        break;
    default:
        echo "NONE";
endswitch;
//OUTPUT:
//Done1

//NOTE:IN CASE OF PERFORMANCE SWITCH HAS BETTER PERFORMANCE
//THAN IFELSE BUT NOT TO WORRY.
