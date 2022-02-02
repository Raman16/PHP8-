<?php


require __DIR__ . '/../vendor/autoload.php';

$collector = new \App\DebtCollectionService();

echo $collector->collectDebt(new \App\CollectionAgency()) . PHP_EOL;
echo $collector->collectDebt(new \App\Rocky()) . PHP_EOL;
