<?
    include "/alglol/config.php";
    
    class Lesson2 {
        function solution(array $A, $K){
            # ([3,8,9,7,6], 3) ->  ([9,7,6,3,8], 3);
            $tmp = array();
            for($i = 0; $i < COUNT($A); $i++){
                $tmp[$K++ % COUNT($A)] = $A[$i];
            }
            ksort($tmp);
            return $tmp;
        }
    }


    $lesson2 = new Lesson2();
    var_dump($lesson2->solution(array(3,8,9,7,6),3));