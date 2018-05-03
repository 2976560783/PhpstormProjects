<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 21:36
 */
$q = isset($_POST['q'])?$_POST['q']:'';
if(is_array($q)){
    $sites = array(
        'RUNOOB' =>'cainiao:http://www.runoob.com',
        'GOOGLE' =>'Google:http://www.google.com',
        'TAOBAO' =>'TAOBAO:http://www.taobao.com'
    );
    foreach($q as $var){
        echo $sites[$var].PHP_EOL;
    }
}else{

}?>
<form action ="" method ="post">
    <select multiple = "multiple" name = "q[]">
        <option value = "">choose a website</option>
        <option value = "RUNOOB">Runoob</option>
        <option value = "GOOGLE">Google</option>
        <option value = "TAOBAO">taobao</option>
    </select>
    <input type ="submit" value ="submit it">
</form>
