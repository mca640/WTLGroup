<!DOCTYPE html>
<html>
<head>
    <title>PHP compare</title>
</head>
<body>

<?php
$x = 10;
$y = 25;
$z = "10";

var_dump($x == $z);
echo "<br>";

var_dump($x === $z);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x !== $z);
echo "<br>";

var_dump($x < $y);
echo "<br>";

var_dump($x > $y);
echo "<br>";

var_dump($x <= $y);
echo "<br>";

var_dump($x >= $y);
?>

</body>
</html>