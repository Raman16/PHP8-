<?php

//require,require_once,include, include_once
include '5.2-constants-predefined-magic.php';
include '5.2-constants-predefined-magic.php';

// //output
// 7
// 9
// C:\xampp\htdocs\PHP8\5.2-constants-predefined-magic.php
// 7
// 9
// C:\xampp\htdocs\PHP8\5.2-constants-predefined-magic.php



echo '<br>';
//BELOW INCLUDE_ONCE WILL BE GET EXECUTED ONLY ONCE
include_once '11-controlstructure-if.php';
include_once '11-controlstructure-if.php';
include_once '11-controlstructure-if.php';
include_once '11-controlstructure-if.php';
include_once '11-controlstructure-if.php';
include_once '11-controlstructure-if.php';
include_once '11-controlstructure-if.php';
//OUTPUT:
//TRUE TRUE c is greater number10 is neither greater than or equal to 20

//DIFFERENCE BETWEEN include() AND require()
//include() gives a warning if file not found.
//          (will not stop script execution).
//require() gives a fatal error if the file not found.
//          (stops the script execution).


//DIFFERENCE BETWEEN include(),require() === include_once(),require_once()
//The include_once and require_once statements will only include the
// file once even if asked to include it a second time.