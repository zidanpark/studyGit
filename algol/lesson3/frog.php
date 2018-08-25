<?
    class FrogJmp{
        /*
         *  X = 10 // 시작점.
         *  Y = 85 // 총거리.
         *  D = 30 // 한번 점프시 
         *  1 = 10 + 30
         *  2 = 10 + 30 + 30
         *  3 = 10 + 30 + 30 + 30
         */
        function solution($X, $Y, $D){
            $distance = $Y - $X; // 총 거리.
            $res = $distance % $D == 0 ? $distance/$D : ($distance/$D) + 1;
            return floor($res);
        }
    }

    $frg = new FrogJmp();
    echo $frg->solution(10,100,30);