<?php
echo "<h2>task1</h2>";
$length=10;
$width=5;
$area=$length*$width;
$perimeter=2*($length+$width);
echo "Area= $area <br>";
echo "Perimeter=  $perimeter";

echo "<h2>task2</h2>";
$amount=1000;
$vat=$amount*0.15;
echo "Amount=$amount<br>";
echo "Vat=$vat";



echo"<h2>task3</h2>";
$num=5;
if($num%2==0)
    {
        echo "$num is even<br>";
    }
    else 
        {
            echo "$num is odd";
        }

        echo "<h2>task4</h2>";
        $a=5;
        $b=3;
        $c=1;
        if($a>=$b && $a>=$c)
        {

           echo "$a is a largest number";
        }
        
        elseif($b>=$a && $b>=$c)
        {
            echo"$b is a largest number";
        }
        else{
           echo " $c is a largest number";
        }

        
        echo"<h2>task5</h2>";
        for($i=10; $i<=100; $i++)
        {
        if($i%2 != 0){
        echo $i ."<br>";
        }
        }
       

        echo"<h2>task6</h2>";
        $arr=array(10,20,30,40,50);
        $search=30;
        $found=false;
        for($i=0;$i<count($arr);$i++)
            {
                if($arr[$i]==$search)
                    {
                        $found=true;
                        break;
                    }
            }
            if($found){

            
                echo"element found";
            }
            else{
                echo"element not found";
            }
            

            echo"<h2>task7(a)</h2>";
            for($i=1;$i<=3;$i++)
                {
                    for($j=1;$j<=$i;$j++)
                        {
                           echo"* "; 
                        }
                        
                
                echo "<br>";
                }
                
                echo"<h2>task7(b)</h2>";
                for($i=3;$i>=1;$i--)
                    {
                        for($j=1;$j<=$i;$j++)
                            {
                                echo $j . " " ;
                            }
                            echo "<br>";
                    }

                    echo " <h2>task7(c)</h2>";
                    $ch='A';
                    for($i=1;$i<=3;$i++)
{
    for($j=1;$j<=$i;$j++)
        {
echo $ch ." ";
    $ch++;
        }
        

echo "<br>";

}
?>