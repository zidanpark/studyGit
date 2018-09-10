<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-09-10
 * Time: 오후 8:27
 */

interface Crawing {
    function crawing();
}

class simpleCrawing implements Crawing {
    function crawing(){
        return "꽥꽥";
    }
}

class noCrawing implements Crawing {
    function crawing(){
        return "안웁니다.";
    }
}
