<?php

/*STRINGS*/
$firstName = 'Raman';
$lastName  ='bandari';

//USING SINGLE QUOTE:
echo '$firstName $lastName';//$firstName $lastName

//USING DOUBLE QUOTE:
echo "$firstName $lastName";//Raman bandari
echo "${firstName} ${lastName}";//Raman bandari
echo "{$firstName} {$lastName}";//Raman bandari


echo '<br>';
//Accesing String Elements:
$name = $firstName.' '.$lastName;
echo $name[0];//'R'
echo $name[-2];//'r' //from back of the string
$name[6] = 'B';//
echo $name; //Raman Bandari

?>