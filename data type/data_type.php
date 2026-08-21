<?php
$name = "Shakib";
$income = 1000000;
/* php data type
1. string
2. integer
3. float
4. boolean
5. object
6. array
7. null
*/
$name="Shakib";
$friend= "Tamim";
echo "My name is $name and my friend is $friend <br>";

//integer -non decimal number
$income =111;
$debts = -333;
echo $income;
echo "<br>";
echo "$debts <br>";

//float 
$income=33.33;
$debts=34.44;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

//boolean
$x=true;
$y=false;
echo "$x <br>";
echo var_dump($y);
echo "<br>";

//object instances of class
//employee is a class ------shakib can be one object

//array
$friend= array("shakib","tamim","ramim");
echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[2];
echo "<br>";
?>