<?php
echo str_pad("*",100,"*");

//定义类，如同定义一个工厂，其目的是生成对象...
class Person
{

    //属性
    var $name;
    var $age=20;
    private  $sex;



    function eat($food)
    {
        echo "姓名：";
        echo $this->name;
        echo "<br>";
        echo "食物：".$food;
        echo "<br>".str_pad("+",100,"+")."<br>";
        $aa = new Person();
        $aa->thinking();

    }

    function thinking()
    {
        echo "<br>思考....";
    }
}



//实例化，得到一个对象 $pa
$pa = new Person();
$pa->name="张三";
$pa->age=30;
//调用对象的方法
$pa->eat("大脚板");



//实例化一个对象,$pb,注意，$pa和$pb是两个不同的对象，即他们是两个人
$pb=new Person();
$pb->eat("水果");

// 得到第三个对象（人）
$pc=new Person();
$pc->name="王五";
$pc->eat("苹果");

?>