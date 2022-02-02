<?php

function add($a,$b,$c){
  echo $a.' '.$b.' '.$c;
}
call_user_func_array('add',[10,20,30]);
?>