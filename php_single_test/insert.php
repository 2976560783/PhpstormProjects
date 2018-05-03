<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-26
 * Time: 19:19
 */
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "test";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die('连接失败：'.$conn->connect_error);
}
$sql_insert = "insert into test_choose (std_no,cou_no)
values (111,1122)";
$sql_select ="select * from test_choose";
$sql_update = "update test_choose set std_no = '299' where cou_no = '222'";
if($conn->query($sql_insert) === true){
    echo '插入成功'."<br>";
}else{
    echo 'error:'.$sql."<br>".$conn->error;
}

$result = $conn->query($sql_select);
while($row = $result->fetch_array()){
    echo $row['std_no']."<br>";
}
if ($conn->query($sql_update) === true){
    echo '更新成功'."<br>";
}else{
    echo 'error:   '.$sql_update."   ".$conn->error."<br>";
}
$conn->close();
?>