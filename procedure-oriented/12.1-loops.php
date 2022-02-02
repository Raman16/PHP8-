<?php

////////////////////////////////////////////
//while loop
$i = 0;
while ($i < 2) {
    echo $i;
    $i++;
}
//0 1
echo '<br>';
//Aleternative while loop
$a = 5;
while ($a <= 10) :
    echo $a;
    $a++;
endwhile;
//5 6 7 8 9 10
////////////////////////////////////////////

////////////////////////////////////////////
//do while
echo '<br>';
do {
    echo $i;
    $i++;
} while ($i <= 5);
//2 3 4 5

echo '<br>';
////////////////////////////////////////////
//for loop
echo '<br>';
for ($i = 0; $i < 3; $i++) {
    echo $i;
}
//0 1 2

echo '<br>';
//Alternative syntax
for ($i = 0; $i < 3; $i++) :
    echo $i;
endfor;
//0 1 2
////////////////////////////////////////////


////////////////////////////////////////////
//foreach
echo '<br>';
$array = ['name' => 'Raman', 'age' => 30];
foreach ($array as $key => $value) {
    echo $key . ':' . $value;
    echo ',&nbsp';
}
//name:Raman, age:30, 


echo '<br>';
//Alternative syntax
$array = [
    'name' => 'Raman',
    'age' => 30,
    'skills' => ['PHP', 'REACT', 'NODEJS']
];
foreach ($array as $key => $value) :
    if (is_array($value)) :
        $value = implode(' | ', $value);
    endif;
    echo $key . ':' . $value;
    echo '&nbsp';
endforeach;
//name:Raman age:30 skills:PHP | REACT | NODEJS
/////////////////////////////////////////////////