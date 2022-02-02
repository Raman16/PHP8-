<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dateTime = new DateTime('tomorrow 3.35pm');
// var_dump($dateTime);


$dateTime = new DateTime('05/12/2021 3.30PM', new DateTimeZone('Europe/London'));
// var_dump($dateTime);


// //Setting timezone:
$dateTime->setTimezone(new DateTimeZone('Asia/Kathmandu'));
// var_dump($dateTime);

// //Get Timezone
// echo  $dateTime->getTimezone()->getName() . PHP_EOL;


// //setting format
// echo $dateTime->format('m/d/Y g:i a') . PHP_EOL;


$dateTime->setTimezone(new DateTimeZone('Asia/Kathmandu'))
    ->setDate(2021, 4, 21)
    ->setTime(2, 15);

// echo $dateTime->format('m-d-Y g:i a') . PHP_EOL;




//WHEN PASSING A DATE AS AN ARGUEMENT:
$date = '12/05/2021 3:30pm'; //12-may-2021
$dateTime = new DateTime($date); //After passing date
//var_dump($dateTime);//05-dec-2021

// //TO FIX ABOVE ISSUE:
$dateTime = new DateTime(str_replace('/', '.', $date));
// var_dump($dateTime);//12-may-2021

// //and the Better solution is below:
$dateTime = DateTime::createFromFormat('d/m/Y g:iA', $date);
//var_dump($dateTime);//12-may-2021


//WHEN ONLY DATE IS GIVEN(NOT TIME)
$dateTime = DateTime::createFromFormat('d/m/Y', '15/05/2021');
//var_dump($dateTime,new DateTime('15-05-2021'));
//Default Time from createFromFormat() is current time: 2021-05-15 06:29:50.000000 
//Default Time from DateTime() constructor is 00:00:00: 2021-05-15 00:00:00.000000

//SETTING TIME TO 00:00:00 FOR createFromFormat()
$dateTime = DateTime::createFromFormat('d/m/Y', '15/05/2021')->setTime(0, 0);


//COMPARING DATES:
$dateTime1 = new DateTime('05/12/2021 9:15 AM');
$dateTime2 = new DateTime('05/12/2021 9:14 AM');

// var_dump($dateTime1<$dateTime2);
// var_dump($dateTime1>$dateTime2);
// var_dump($dateTime1==$dateTime2);
// var_dump($dateTime1<=>$dateTime2);


//Date Interval:
$dateTime1 = new DateTime('05/12/2021 9:15 AM');
$dateTime2 = new DateTime('03/15/2021 3:25 AM');

//var_dump($dateTime1->diff($dateTime2));

//Date information
//echo $dateTime1->diff($dateTime2)
//    ->format('%Y years, %m months, %d days, %H %i %s') . PHP_EOL;
//To get total number of days:
//echo $dateTime1->diff($dateTime2)->format('%a') . PHP_EOL;


//DateInterval class
$dateTime = new DateTime('12/30/2021 9:15');
$interval = new DateInterval('P3M2D');
//var_dump($interval);
echo $dateTime->add($interval)->format('m/d/Y g:iA') . PHP_EOL;

echo $dateTime->sub($interval)->format('m/d/Y g:iA') . PHP_EOL;

echo PHP_EOL;

$interval->invert = 1; //Goes backward date
echo $dateTime->add($interval)->format('m/d/Y g:iA') . PHP_EOL;

echo $dateTime->sub($interval)->format('m/d/Y g:iA') . PHP_EOL;



$from = new DateTime();
$to = (new DateTime())->add(new DateInterval('P1M'));
echo  $from->format('m/d/Y') . '-' . $to->format('m/d/Y') . PHP_EOL;
//12/31/2021-01/31/2022


//Below Code Effects Original Date Object:
$from = new DateTime();
$to = $from->add(new DateInterval('P1M'));
echo  $from->format('m/d/Y') . '-' . $to->format('m/d/Y') . PHP_EOL;
//01/31/2022-01/31/2022

//To avoid effecting Original Date Object:
$from = new DateTime();
$to = (clone $from)->add(new DateInterval('P1M'));
echo  $from->format('m/d/Y') . '-' . $to->format('m/d/Y') . PHP_EOL;
//12/31/2021-01/31/2022


//IMMUTABLE DATETIME OBJECT
$from = new DateTimeImmutable();
$to = $from->add(new DateInterval('P1M'));
var_dump($from === $to);
echo  $from->format('m/d/Y') . '-' . $to->format('m/d/Y') . PHP_EOL;


//DatePeriod:
$period = new DatePeriod(
    new DateTime('12/31/2021'),
    new DateInterval('P1D'),
    new DateTime('01/12/2022')
);
foreach ($period as $date) {
    echo $date->format('m/d/Y') . PHP_EOL;
}

echo PHP_EOL.PHP_EOL;

$period = new DatePeriod(
    new DateTime('12/31/2021'),
    new DateInterval('P1D'),
    4,
    DatePeriod::EXCLUDE_START_DATE
);
foreach ($period as $date) {
    echo $date->format('m/d/Y') . PHP_EOL;
}
