<?php

  
  $name = "Raman";
  echo $name;//Raman

  //Error: $1name
  //Correct:$name, $_name

  //Error: $this = "Hello" //"this" is a keyword in PHP


  //Assigning By Values:
  $x = 10;
  $y = $x;
  echo $x, $y;//10 10

  //Assigning by Reference
  $a = 10;
  $b = &$a;
  $a = 30;
  echo $a, $b;//30 30

  //Variables with in Text: 
  $firstName = "Raman";
  echo "Hello $firstName";//Hello Raman
  echo "Hello {$firstName}";//Hello Raman

  //Concatenating Variables with Text:
  echo "Hello ".$firstName;//Hello Raman
  ?>