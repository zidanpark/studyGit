<?
<<<<<<< HEAD
=======

>>>>>>> 70e204db2d25d384c9caf2c6bc3943d9e0a6342a
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./testClass.php";


$duckType = "duck";
$test = new tesCtlass($duckType);
$test->flyingBehavior(new noFlying());
$duck = $test->productDuck();

echo $duck->type;
echo "<br>";
<<<<<<< HEAD
echo $duck->fly;
=======
echo $duck->fly;

>>>>>>> 70e204db2d25d384c9caf2c6bc3943d9e0a6342a
