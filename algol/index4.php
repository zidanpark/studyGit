<?
    function solution($A){
        if(!isset($n)) $n = 0;
        # 동일수치가 다 떨어졌을때;
        # 더이상 Uniq에 수치가 없을때
        # $n 이 끝났을때
        
        $al_cnt = COUNT($A);
        $res_arr = array();
        $uniq_cnt = COUNT($uniq);
        $n = 0;
        $flag = false;
        for($i = 0; $i < $al_cnt; $i++){
            $uniq = array_unique($A);
            $res_cnt = 0;
            for($z = $n; $z < $al_cnt;$z++){
                if(COUNT($uniq) <= 0 ) continue;
                if(in_array($A[$z],$uniq)) {
                    $key = array_search($A[$z], $uniq);
                    unset($uniq[$key]);
                    $flag = true;
                }
                if($flag) $res_cnt++;    
                if(count($uniq) == 0) {$res_arr[] = $res_cnt;} 
            }   
            
            if($uniq_cnt > $al_cnt - $n) continue;
            $n++;
        }
        
        return min($res_arr);
        
    }

  
    echo solution(array(7,3,7,3,1,3,4,1));