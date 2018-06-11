<?php
//Как поменять 2 переменные местами без использования третьей?

$a = ["4","9","2","7","3"];
$b = 'Hello world';
var_dump($a);
echo "<br>";
echo $b;
echo "<br>";
list($b, $a) = array($a, $b);
echo $a;
echo "<br>";
var_dump($b);