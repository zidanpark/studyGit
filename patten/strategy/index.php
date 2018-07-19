<?
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./testClass.php";


$duckType = "duck";
$test = new tesCtlass($duckType);
$test->flyingBehavior(new noFlying());
$duck = $test->productDuck();

echo $duck->type;
echo "<br>";
echo $duck->fly;