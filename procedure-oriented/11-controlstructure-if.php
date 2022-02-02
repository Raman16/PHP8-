<html>

<body>
    <?php if (false) : ?>
        TRUE
    <?php elseif (true && true) : ?>
        TRUE TRUE
    <?php elseif (false && false) : ?>
        FALSE FALSE
    <?php else : ?>
        oops!
    <?php endif;
    ?>
</body>

</html>

<?php
$a = 10;
$b = 20;
$c = 30;
if ($a > $b && $a > $c) {
    echo "a is greater number";
} elseif ($b > $c && $b > $a) {
    echo "b is greater number";
} else if ($c > $a && $c > $b) {
    echo "c is greater number";
} else {
    echo "oops, all numbers are equal";
}


//If you were to write this with colon syntax:
if ($a > $b) :
    echo $a . " is greater than " . $b;
elseif ($a == $b) : // Note the combination of the words.
    echo $a . " equals " . $b;
else :
    echo $a . " is neither greater than or equal to " . $b;
endif;

//Note: Note that elseif and else if will only be considered 
//exactly the same when using curly brackets as in the above
//example. When using a colon to define your if/elseif conditions, 
//you must not separate else if into two words, or PHP will fail 
//with a parse error.
//Also it is good to use colon syntax in PHP in HTML


?>