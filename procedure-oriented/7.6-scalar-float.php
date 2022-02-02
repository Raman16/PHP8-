<?php
 $x = 13.5;
 echo $x;

 $x = 13.5e3;//exponentials
 echo $x; 

 //$d = 1_234.567; // as of PHP 7.4.0

 echo "<br>";
 echo floor((0.1+0.7)*10);//7 not //8
 

 echo ceil((0.1+0.2)*10); //4 not //3

 echo ceil((0.1+0.8)*10); //9

 //NOTE:CONSIDERING ABOVE OUTPUTS, ITS BETTER NOT TO
 //COMPARE THE FLOATING POINTS IN BLOCK STATEMENTS

 $x = 0.23;
 $y = 1-0.77;
 if($x == $y){
     echo "Yes";
 } 
 else{
     echo "No";
 }
 //OUTPUT:NO

 //BOUNCING NUMBER:INFINITE
 $x = PHP_FLOAT_MAX * 2;
 echo  $x; //INF
 echo is_infinite($x);//1

//Float Type Conversion
 $x = '15.5axx';
 echo (float)$x; //15.5

?>