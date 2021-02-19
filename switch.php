<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>
<?php

$favdish="beans";
switch ($favdish) {
    case "beans";
    echo "your favdish is beans";
echo "<br>";
    case "ugali";
    echo "your favdish is ugali";
echo "<br>";
    case "chapati";
    echo "your favdish is chapati";

}
echo "<br>";
$favcolor="red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue";
    echo "Your favorite color is blue!";
    break;
  case "green";
    echo "Your favorite color is green!";
    break;
  default;
    echo "Your favorite color is neither red, blue, nor green!";
}


?>






</body>
</html>
