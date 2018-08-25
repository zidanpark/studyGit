<?

    include "/alglol/config.php";

    class OddOccurrencesInArray{
        function solution($A){
            if(count($A) >= 1000000) return;
            $tmp = array();
            $res = 0;
            //$cnt = true;
            for($i = 0 ; $i < count($A) ; $i++){
                if(!isset($tmp[$A[$i]])) $tmp[$A[$i]] = 0;
                $tmp[$A[$i]] += 1;
            }
            foreach($tmp AS $k=>$v){
                if($v%2 != 0){
                    $res = $k;
                }
            }
            return $res;
        }
    }

    $odd = new OddOccurrencesInArray();
    echo $odd->solution(array(9,3,9,3,9,7,9));