<?php
/*
operators
arithmatic 
assignment operators
comparison operators
logical operators
*/
$a=44;
$b=8;
echo $a+$b;
echo "<br>";
echo $a-$b;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $a/$b;
echo "<br>";
echo $a%$b;
echo "<br>";
//mean a^b
echo $a**$b;
echo "<br>";
//assignment operators
$x=$a;
echo "for x the valos is ".$x . "<br>";
$x+=6;
echo "for x the valos is ".$x . "<br>";

//comparison operators
$x=9;
$y=9;
echo "for x==y , the result is "; 
echo var_dump($x==$y). "<br>";
echo "for x==y , the result is ". ($x==$y). "<br>";
echo var_dump($x==$y). "<br>";
echo var_dump($x>=$y). "<br>";
echo var_dump($x<$y). "<br>";
echo var_dump($x>$y). "<br>";
//if not equel then true
echo var_dump($x<>$y). "<br>";

//logical operation

$m=true;
$n=false;
//and logic...if all the value is ture then result is ture..otherwise false
echo "for m and n, the result is";
echo var_dump($m and $n);
echo "<br>";
//or logic..if any one ture then result is ture..
echo "for m and n, the result is";
echo var_dump($m or $n);
echo "<br>";
//and other logic
echo "for m and n, the result is";
echo var_dump($m && $n);
echo "<br>";


?>