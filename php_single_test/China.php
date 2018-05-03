<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-12
 * Time: 12:12
 */
include("World.php");
class China extends World{
    var $zhidu = '特色社会';
    function test(){
        echo $this->war();
    }

}
$c = new China();
$c->test();
echo $c->zhidu;
?>