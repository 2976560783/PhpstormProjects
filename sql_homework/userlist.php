<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-27
 * Time: 18:37
 */
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die('连接失败'.$conn->connect_error);
}

$sql_insert = "insert into test_sqlhomework
(username,password,school,realname,address,question,ancer,email)
VALUES ('$_POST[username]','$_POST[pwd]','$_POST[school]','$_POST[realname]',
'$_POST[address]','$_POST[select1]','$_POST[ancer]','$_POST[email]')";

$sql_select = "select username ,password ,school , realname,address ,email from test_sqlhomework";

if($conn->query($sql_insert) === true){
    echo '数据插入成功'."<br>";
}else{
    echo '数据插入失败'.$conn->error."<br>";
}

$result = $conn->query($sql_select);
echo "<table border='1'>";
echo "<tr>
<th>用户名</th>
<th>密码</th>
<th>学校</th>
<th>真实姓名</th>
<th>地址</th>
<th>邮件</th>
</tr>";
while($row = $result->fetch_array()){

    echo "<tr>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td>".$row["school"]."</td>";
    echo "<td>".$row["realname"]."</td>";
    echo "<td>".$row["address"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "</tr>";
}

$conn->close();
?>