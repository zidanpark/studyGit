<?

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {

    $cnt = COUNT($A);
    $res = 0;
    $num = 1;
    $res_arr = array();
    if($cnt > 0 ){
        
        $a_uniq = array_unique($A);
        sort($a_uniq);
        $cnt_uniq = COUNT($a_uniq);
        for($i = 0 ; $i < $cnt_uniq; $i ++){
            if($res != 0) continue;
            if($a_uniq <= 0) continue;
            if($a_uniq[$i] == $num) {
                $num++;                   
            } else {
                $res = $num;
            }
     
        }
    }
    
    if($num == 0 ) return 1;
    return $num;
}


var_dump(solution(array(1,2,3)));