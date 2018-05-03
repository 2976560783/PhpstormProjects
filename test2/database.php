<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 19:47
 */

header("Content-Type:Text/html;charset = utf-8");
$dbms = "mysql";
$dbName = "php_admin";
$user = "root";
$password = "admin";
$host = "localhost";
$dsn = "$dbms:host=$host;dbname = $dbName";
try{
    $pdo = new PDO($dsn,$user,$password);
    echo "databases connect succeed.";
    $query = "select * from tb";
    $result = $pdo->prepare($query);
    $result->execute();
    while ($res= $result->fetch(PDO::FETCH_ASSOC)){

    ?>
        <tr>
        <?php echo $res["id"]; ?>
        </tr>
<?php
    }
}catch (Exception $e){
    echo $e->getMessage();
}
?>