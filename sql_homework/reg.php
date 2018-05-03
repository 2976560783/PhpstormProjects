<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户申请</title>
</head>
<body>
<form action="userlist.php" method="post" >
    用户名
    <input type="text" name="username" size="20">
    <br>
    密码
    <input type="password" name="pwd" size="30">
    <br>
    学校
    <input type="text" name="school" size="25">
    <br>
    真实姓名
    <input type="text" name="realname" size="25">
    <br>
    家庭住址
    <input type="text" name="address" size="25">
    <br>
    问题
    <select name="select1">
        <option value="你爸爸生日">你爸爸生日</option>
        <option value="你妈妈生日">你妈妈生日</option>
    </select>
    <br>
    答案
    <input type="text" name="ancer" size="25">
    <br>
    邮件
    <input type="text" name="email" size="25">
    <br>
    <input type="submit" value="提交">
    <input type="reset" value="重置">
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-04-27
 * Time: 18:37
 */

?>