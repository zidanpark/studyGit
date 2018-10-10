<?
$test = '[{"5":"5"},{"6":"6"}]';
$test = json_decode($test);

/*
 * array(
 *      [0] => array([5] => [5]),
 *      [1] => array([6] => [6]),
 *      ...
 *      [n] => array([x] => [x])
 * ) 
 * => return 
 * array(
 *      [0] => 5
 *      [1] => 6
 *      ...
 *      [n] => x
 * )
 */

$test = objectToArray($test); // object -> array 치환
$test2 = array_map('test_func',$test); // array 안에 값을 뽑아옴.

function test_func($value){
    $idx = array_values($value);
    return $value[$idx[0]];
}


function objectToArray ($object) {
    if(!is_object($object) && !is_array($object))
        return $object;

    return array_map('objectToArray', (array) $object);
}
?>