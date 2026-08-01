<?php
echo"<h2>task1</h2>";
$principal=1000;
$rate=5;
$time=2;
$Interest =($principal*$rate*$time)/100;
echo"Simple Interest=$Interest";

echo"<h2>task2</h2>";
$num=17;
$prime=true;
if($num <= 1){
    $prime=false;
}
for($i=2;$i<$num;$i++)
    {
        if($num % $i == 0){
 $prime=false;
        break;
        }
           
    }
    if($prime){
        echo "$num is a prime number";
    }
    else{
        echo "$num is not a prime number";
    }

    echo"<h2>task3</h2>";
$num=5;
$factorial=1;
for($i=1;$i <= $num;$i++)
    {
        $factorial=$factorial*$i;
    }
    echo"Factorial of $num =$factorial";




    echo"<h2>task4</h2>";
    $arr=Array(10,20,30,40,50);
    $sum=0;
    for($i=0;$i<count($arr);$i++)
    {
    $sum=$sum+$arr[$i];
    }
    $avg=$sum/count($arr);
    echo "Sum=$sum<br>";
    echo "Average=$avg";


    echo"<h2>task5</h2>";
    for($i=1;$i<=4;$i++)
        {
            for($j=1;$j<=$i;$j++){
echo $i ." ";
            }
                echo "<br>";
        }