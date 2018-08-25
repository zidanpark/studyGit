<?
error_reporting(E_ALL);
ini_set("display_errors", 1);

$classes = array("barista","coffee","customer","cacheir","orderBehavior","cacheirBehavior");
__autoload($classes);

function __autoload($class_names) {
    foreach($class_names as $class_name){
        if(file_exists("./classes/".$class_name . '.class.php')){
            require_once("./classes/".$class_name . '.class.php');
        }            
    }
}