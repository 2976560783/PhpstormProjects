<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "myDBpdo";
try{
    $conn = new PDO("mysql:host = $servername ;dbname = $dbname",$username,$password);
    echo "connect success"."<br>";
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "create table MyGuest(
id int(6) unsigned auto_increament primary key,
firstname varchar(30) not null,
lastname varchar(30) not null,
email varchar(30),
reg_date TIMESTAMP 
)";
    $conn->exec($sql);
    echo "create is success";
}catch(PDOException  $e)
{
    echo $sql."<br>".$e->getMessage();
}
$conn = null;
?>