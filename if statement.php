<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If statements</title>
</head>
<body>
<?php


//if elseif else statement
$d=date("s");
if ($d<"10"){
    echo "have a goodmorning";
}
elseif ($d<"20"){
    echo "have a midmorning";
}

else{
    echo "have a goodnight";
}




//if statement

$s=20;

if ($s <15){

    echo "The number is of range";
}


//if...else.. statement
echo "<br>";
$y=25;

if ($y < 25){
    echo "The number is of range";
}
else{
    echo "The number is not of range";
}


echo "<br>";
//if...elseif...else.. statement


$m=27;
if ($m<15){
    echo "The number is less than";
}

elseif ($m>25){
    echo "The number is greater than";
}

else{
    echo "The number is recurring";
}

?>



</body>
</html>
