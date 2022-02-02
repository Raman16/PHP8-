<?php


require_once __DIR__ . '/../vendor/autoload.php';
use App\MyInterface;
$obj = new class(10, 25, 32) implements MyInterface
{
    public function __construct(
        public int $x,
        public int $y,
        public int $z
    ) {
    }
};
echo get_class($obj).PHP_EOL;

foo($obj);

function foo(MyInterface $obj){
  var_dump($obj);
}
