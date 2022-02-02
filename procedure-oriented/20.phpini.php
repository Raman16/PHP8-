<?php

//php.ini:
//error_reporting=E_ALL

// ini_set(): This is the function that mainly will try to override the configuration found initially in the ini file.
// display_errors: It is one of the directives that will determine whether there is a need to determine the error or remain hidden from the end-user.
// display_startup_errors: It is another directive that is also behaving similarly as display_errors with a difference in the fact that the display startup error will be responsible for fetching all the errors at the startup time the screen.
// error_reporting(): Error reporting function acts like a filter which is mostly responsible for filtering out the errors necessary for display.
// E-ALL: It is the most recommended directive by developers as it provides more understandable and readable formats to developers.

var_dump(ini_get('error_reporting')); //string(5) "32767" 
var_dump(E_ALL); //int(32767)

echo '<br>';
var_dump(ini_get('display_errors')); //string(1) "1" 
ini_set('display_errors', 0); //will not display any error
var_dump(ini_get('display_errors')); //string(1) "0"


ini_set('display_errors', 1);
ini_set('max_execution_time', 3);
sleep(5);
echo "Hello World";
//Fatal error: Maximum execution time of 3 seconds exceeded
// in C:\xampp\htdocs\PHP8\20.phpini.php on line 23
