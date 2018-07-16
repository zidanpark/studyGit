<?
<<<<<<< HEAD
    echo "Å×½ºÆ®2";
=======
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./testClass.php";


$duckType = "duck";
$test = new tesCtlass($duckType);
$test->flyingBehavior(new simpleFlying());
$duck = $test->productDuck();
echo $duck->type;
echo "<br>";
echo $duck->fly;


>>>>>>> 88a8d33a993345806337d7fb47a70f660366edab
