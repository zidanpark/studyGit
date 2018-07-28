<?
    include "../config.php";
    class PermMissingElem{
        function solution($A){
            
            if(COUNT($A) > 100000 || !isset($A)) return 0;
            $max = 0;
            
            for($i = 0; $i < count($A); $i++){
                if(!isset($tmp[$A[$i]])){
                    $tmp[$A[$i]] = 1;
                    $max = $max < $A[$i]? $A[$i]: $max;
                } else return $result;
            }

            if($max == count($A)+1){
                $cnt = 0; 
                for($i = 1; $i < $max + 1; $i++){
                    if(!isset($tmp[$i])){
                        $result = $i;
                        $cnt++;
                    }
                }
                if($cnt > 1) $result = 0;
            } else  $result = $max + 1;
            
            return $result;
        }
    }


    $per = new PermMissingElem();
    echo $per->solution(array(1,2,3,5));
    echo $per->solution(array(1,2,3,4));