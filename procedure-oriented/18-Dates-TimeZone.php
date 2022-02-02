<?php

//unix timestamp:
echo time(); //1639403792
echo '<br>';


//Formatting dates:
echo date('m/d/Y g:i a', time()); //12/13/2021 1:56 pm
echo '<br>';

$current_time = time() + (5 * 24 * 60 * 60); //After 5 days
echo date('m/d/Y, g:i a', $current_time); //12/18/2021, 1:56 pm
echo '<br>';

//Current Timezone:
echo "Timezone:", date_default_timezone_get(); //Timezone:UTC



//Setting new Timezone:
date_default_timezone_set('Asia/Calcutta');
echo '<br>';
echo "Timezone:", date_default_timezone_get(); //Timezone:Asia/Calcutta



//mktime() to get unix timestamp
echo '<br>';
echo mktime(0, 0, 0, 4, 10, null); //1617993000
echo '<br>';
echo date('m/d/Y', mktime(0, 0, 0, 4, 10, null)); //04/10/2021

echo '<br>';
//Parsing Date:
echo  strtotime('2021-12-13 07:33:00'); //1639360980
echo '<br>';
echo date('m/d/Y g:i a', strtotime('2021-12-13 07:33:00')); //12/13/2021 7:33 am




//IMPORTANT: DATE PARSE FROM DATE FORMAT:
$date = date('m/d/Y g:i a', strtotime('2021-12-13 07:33:00'));
echo '<br>';
echo '<pre>';
print_r(date_parse($date));
//Array
// (
//     [year] => 2021
//     [month] => 12
//     [day] => 13
//     [hour] => 7
//     [minute] => 33
//     [second] => 0
//     [fraction] => 0
//     [warning_count] => 0
//     [warnings] => Array
//         (
//         )

//     [error_count] => 0
//     [errors] => Array
//         (
//         )

//     [is_localtime] => 
// )
