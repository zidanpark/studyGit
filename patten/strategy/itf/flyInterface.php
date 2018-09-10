<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-09-10
 * Time: 오후 8:28
 */

interface Flying {
    function fly();
}

class simpleFlying implements Flying {
    function fly(){
        return "저는 평범하게 날아요";

    }
}

class noFlying implements Flying {
    function fly(){
        return "저는 날지 못합니다.";
    }
}