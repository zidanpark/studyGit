<?
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./testClass.php";


class main {
    function createDuck(){

    }
}


$duckType = "duck";
$test = new tesCtlass($duckType);
$test->flyingBehavior(new simpleFlying());
$test->crawingBehavior(new simpleCrawing());
$duck = $test->productDuck();

echo $duck->type;
echo $duck->craw;
echo $duck->fly;
