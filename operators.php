<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$a=30;
$b=5;

echo $a + $b; //this is an addition operator
echo "<br>";
echo $a - $b;// this is a subtraction operator
echo "<br>";
echo $a * $b;//this is a multiplication operator
echo "<br>";
echo $a / $b;//this is a division operator
echo "<br>";
echo $a % $b;//this is a modulus operator
echo "<br>";



echo "Assignment operator";
echo "<br>";
//Assignment Operator

$c=18;
echo $c; //Equals to operator
echo "<br>";
$d=9;
$d +=10;


echo "This is comparison operrator";
echo "<br>";

$e=30;
$f="Roy";
$g="30";
$h=30;
$i="15";
var_dump($e==$f); //This is equals operators
echo "<br>";

var_dump($e===$g);

echo "<br>";

var_dump($e===$h); //this is identical operator


?>
</body>
</html>
