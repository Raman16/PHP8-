<?php
//Heredocs and nowdocs are the easiest and cleanest ways
// in php to use and format multiline strings.

 
 $firstName = 'Raman';
 $lastName  = 'bandari';


 ////HEREDOCS////
 $heredocs = <<<_html
  <div>First Name:$firstName</div>
  <div>Last Name :$lastName</div>
 _html;
 echo $heredocs;
//'string interpolation' does happen for heredocs
//Output:
//First Name:Raman
//Last Name :bandari

/////NOWDOCS/////
 $nowdocs = <<<'_html'
  <div>First Name:$FirstName</div>
  <div>Last Name :$lastName</div>
 _html;
 echo $nowdocs;
 //'string interpolation' does not happen for nowdocs
//Output:
//First Name:$FirstName
//Last Name :$lastName
?>