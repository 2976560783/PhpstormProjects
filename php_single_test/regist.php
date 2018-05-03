<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-26
 * Time: 19:50
 */
$server_name="localhost";
$user_name = "root";
$password = "admin";
$dbname = "test";

$conn = new mysqli($server_name,$user_name,$password,$dbname);
if($conn->connect_error){
    die('连接失败'.$conn->connect_error);
}

$sql_insert = "insert into test_regist (name,password,adress,email)
values ('$_POST[user]','$_POST[pwd]','$_POST[address]','$_POST[email]')";
$sql_select = "select * from test_regist";
//$sql_insert = "insert into test_regist (name) values ('$_POST[name]')";
if($conn->query($sql_insert) === true){
    echo '插入数据成功'."<br>";
}else{
    echo '插入失败'.$conn->error."<br>";
}
$result = $conn->query($sql_select);
while($row = $result->fetch_array()){
    echo '姓名：'.$row["name"]."<br>";
    echo '密码:'.$row["password"]."<br>";
    echo 'email：'.$row["email"]."<br>";
    echo '地址：'.$row["adress"]."<br>";
    echo "<br>";
}
$conn->close();
?>