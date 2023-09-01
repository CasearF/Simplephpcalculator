<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo01</title>

    <style>

   .wai{
    width: 900px;
    height: 30%;
    background-color: rgb(151, 151, 151);
   }
   .a{
    margin: 0px;
    width: 300px;
    text-align:center;
    border: 1px solid #000;
   }
   </style>

</head>
<body>
   <div style="width: 900px;text-align:center;font-size:30px;">商品价格计算</div>

<div class="wai">
<form action="demo01.php" method="post">
<table>
<tr>
<td class="a">商品名称</td>
<td class="a">购买数量</td>
<td class="a">商品价格</td>
</tr>
<tr>
<td class="a">橘子</td>
<td>
<input style="background-color: rgb(151, 151, 151);width: 300px;" type="text" name="juzi">
</td>
<td class="a">7.99</td>
</tr>
<tr>
<td class="a">香蕉</td>
<td>
<input style="background-color: rgb(151, 151, 151);width: 300px;" type="text" name="xiangjiao">
</td>
<td class="a">6.89</td> 
</tr>
<tr>
<td class="a">苹果</td>
<td>
<input style="background-color: rgb(151, 151, 151);width: 300px;" type="text" name="pinguo">
</td>
<td class="a">3.99</td>
</tr>
<tr>
<td class=""></td>
<td></td>
<td class="a"style="    border:0px solid #000;">商品折扣：0.8</td>
</tr>
<tr>
<td class=""></td>
<td><input  type="submit" value="提交" name="submit"></td>
<td class="a"style="    border:0px solid #000;">
<?php 
 {
                                                 
    function sum($juzi, $xiangjiao, $pinguo) {   //定义一个函数，接收$juzi,$xiangjiao,$pinguo三个变量的数值
       $sum = $juzi*7.99 + $xiangjiao*6.89 + $pinguo*3.99;      //在函数内部将这三个变量赋值给$sum并且*每样物品的单价
       return $sum;                              //通过return结果
    }
    $juzi = $_POST['juzi'];
    $xiangjiao = $_POST['xiangjiao'];            //表单中获取名为xiangjiao的input元素的值，并将其赋值给变量$xiangjiao。
    $pinguo = $_POST['pinguo'];
    $zongjiage = sum($juzi, $xiangjiao, $pinguo);//调用sum函数，将表单中返回的值相加赋值给变量$zongjiage
    $a = 0.8;                                    //定义打折数值的变量
    $zhekou = $zongjiage*$a;                     //用赋值完的总价格乘以打折的数值，赋值给最终折扣数值
    echo "打折后商品的总价格： $zhekou";           //通过echo输出总价格
            }
 ?></td>
</tr>

</table>

</form>

</div>

 <br>


</body>
</html>