<?php
 $isCompleted = true ;

 //integers 0, -0 = false
 //float 0.0,-0.0 = false 
 //strings ''     = false 
 // '0'  = false
 // []   = false
 // null = false
 //Negative Number = false

 //1
 if($isCompleted){
     //executes this code
 }
 else {}

 //[1] = true 
 //"string" = true 
 //

 //2.
 $isCompleted = "false"; //it is a string 
 if($isCompleted){
     var_dump($isCompleted);//string(5) "false"
     print(gettype($isCompleted));//string
 }

 //3.TypeCast
 $isCompleted = (int)false;
 if(!$isCompleted) {
    var_dump($isCompleted);//int(0)
    print(gettype($isCompleted));//integer
    print($isCompleted);//0
 }

 //4.
 $isCompleted = false; //
 //Below code, when `false` is printed, it type converted
 //i.e (string)false => ''(An Empty String).
 print($isCompleted);//'' Empty String
 if(!$isCompleted){
     echo "Hello Empty String!";
 }

 //check if a values i boolean or not.
 print(is_bool($isCompleted))//1
?>