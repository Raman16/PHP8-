<?php

/** Varible Scope */


//Global Scope:
$globalMessage = "Hey Global!";
include_once "17.2-scope-includefile.php";
echo '<br>';
echo $fromIncludeFileMessage; //Yes, File Included!

//Local Scope:
function localScope(string $fileMsg, string $globalMsg)
{
    //echo $fromIncludeFileMessage;
    //Undefined variable '$fromIncludeFileMessage'.intelephense(1008)

    //Inorder to Access Variables from Global Scope
    //1.Pass as an arguments:
    echo $fileMsg, ' ', $globalMsg;
    //Yes, File Included! Hey Global!
    echo '<br>';

    //2.use 'global' keyword:
    global $globalMessage, $fromIncludeFileMessage;
    echo $globalMessage, ' ', $fromIncludeFileMessage;
    //Hey Global! Yes, File Included!

    echo '<br>';
    //2.using $GLOBALS:
    echo $GLOBALS['globalMessage'];
    //Hey Global!


    //Assigning New Values to "Global Scope Variable:
    $GLOBALS['globalMessage'] = 'GLOBALS:Hello Global';
    $fromIncludeFileMessage = 'Message Changed Inside Local Scope';
}
// localScope(fileMessage:$fromIncludeFileMessage,gm:$globalMessage);
localScope($fromIncludeFileMessage, $globalMessage);

echo '<br>';
echo $fromIncludeFileMessage; //Message Changed Inside Local Scope
echo '<br>';
echo $globalMessage;//GLOBALS:Hello Global