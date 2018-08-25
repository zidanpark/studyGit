<?
    // 2진으로 변환 > 1과 1 사이의 0의 개수중 최대값
    class Lesson1 {

        function solution($N){
            $txt = array();
            $cnt = $N;
            while((int)$cnt>0){
                $txt[$cnt] = $cnt%2;
                (int)$cnt = $cnt/2;
            }

            $flag = false;
            $cnt = array();
            $k = 0;
           foreach($txt AS $v) echo $v;
           echo "<br>";
            foreach($txt AS $v){
                if($flag === true && $v == 1) { $k++; $flag = false;}
                if($v == 1) {
                    if($flag === false) $flag = true;
                } else if ($v == 0) {
                    if($flag === true){
                        if(!isset($cnt)) $cnt[$k] = 0;
                        $cnt[$k] += 1;
                    } 
                }                
            }
            $res = max($cnt) > 0 ? max($cnt) : 0;
            return $res;
        }
    }

    $lesson = new Lesson1();
    echo $lesson->solution(1000000000);