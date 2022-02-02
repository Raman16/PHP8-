<?php
//Error Handling
//There are sixteen different error levels (i.e. types) are available in PHP.

//error_reporting(0);
//error_reporting(1);
error_reporting(E_ALL);


trigger_error('Example Error', E_USER_WARNING);
//Warning: Example Error in C:\xampp\htdocs\PHP8\21-ErrorHandling.php on line 7
echo "Warning Issued Above and continuing execution :-)";
//Warning Issued Above and continuing execution :-)


trigger_error('Example Error', E_USER_ERROR);
//Fatal error: Example Error in C:\xampp\htdocs\PHP8\21-ErrorHandling.php on line 10
echo "Does not execute this line";

//NOTE: ONLY 'E_USER_' CONSTANT CAN BE USED TO
// TRIGGER ERRORS, WARNING, NOTICE,...MANUALLY.















