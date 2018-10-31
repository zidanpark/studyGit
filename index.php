<?
    # 0 + 0 = 0 
    # 0 + 1 = 1
    # 1 + 1 = 2
    # 2 + 1 = 3
    # 3 + 2 = 5
    # 5 + 3 = 8
    $arr = array(0,1,2,3,5,8);


    foreach($arr AS $k => $r) {
        if($k == 0) {echo $r;}
        else {echo $r[$k]+$r[$k-1];}
    }


?>
