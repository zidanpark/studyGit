<?

    
// 가위바위보
function solution($G){
    if($G == "") return 0;
    $game_arr = array("R","P","S");
    $score_arr = array();
    for($j = 0; $j < count($game_arr) ; $j++){
        for($i = 0 ; $i < strlen($G); $i++ ) {
            $score = 0;
            if($game_arr[$j] == "R"){
                if($G[$i] == "R") $score = 1;
                if($G[$i] == "P") $score = 0;
                if($G[$i] == "S") $score = 2;
            }

            if($game_arr[$j] == "P"){
                if($G[$i] == "R") $score = 2;
                if($G[$i] == "P") $score = 1;
                if($G[$i] == "S") $score = 0;
            }

            if($game_arr[$j] == "S"){
                if($G[$i] == "R") $score = 0;
                if($G[$i] == "P") $score = 2;
                if($G[$i] == "S") $score = 1;
            }
            if(!isset($score_arr[$game_arr[$j]])) $score_arr[$game_arr[$j]] = 0;
            $score_arr[$game_arr[$j]] += $score;                 
        }
    }
    return max($score_arr);
}




    echo solution("PRPRRPP");