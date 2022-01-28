<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
  
<div class="container">This is a php website</div>
<?php

echo"this is using php";
//Single line comment
/*
*/

//Lorem ipsum dolor sit amet.
$variable = 34;
$variable1 =22;
echo $variable1;
echo $variable ;
echo $variable + $variable1;
echo "<br>";
echo "the value of variable1 + variable  is";

echo $variable1 + $variable;
echo "the value of variable1 - variable  is";

echo $variable1 - $variable;
echo "the value of variable1 * variable  is";

echo $variable1 * $variable;
echo "the value of variable1 / variable  is";

echo $variable1 / $variable;
echo "<br>";
//operator in php

//assignment
$newVar = $variable;
$newVar *= 2;
echo "the value of new variable is";
echo $newVar;
echo "<br>";
//logical
//and (&&)
//or(||)
// ! 
//xor
$myvar = (true and false);
echo "<br>";
echo var_dump($myvar);

//incre decre
echo $variable++;
echo "<br>";
echo $variable;
//echo $variable--;
//echo ++$variable;
 echo --$variable;
 echo $variable;

//comparision
//echo "<h1> comparision operator </h1>";
echo "the value of 1==4 is ";
echo var_dump(1==4);
echo "<br>";

echo "the value of 1!=4 is ";

echo var_dump(1!=4);
echo "<br>";

echo "the value of 1>=4 is ";

echo var_dump(1>=4);
echo "<br>";

echo "the value of 1<=4 is ";

echo var_dump(1<=4);

echo "<br>";



?>
<?php
define('PI',3.14);

//datatypes in php
//string
//interger
//float
//boolean
//array
//object
echo "<br>data types <br>";
$var ="this is a string";
echo var_dump($var);
echo "<br>";

$var =67;
echo var_dump($var);
echo "<br>";

$var = 67.1;
echo var_dump($var);
echo "<br>";

$var =true;
echo var_dump($var);
echo "<br>";
echo PI*3;

?>
</body>
</html>