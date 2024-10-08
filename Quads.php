<?php

$a = intval(readline("Enter value of a: "));
$b = intval(readline("Enter value of b: "));
$c = intval(readline("Enter value of c: "));
$d = - ($b);
$e = $b ** 2;
$f = 4 * $a * $c;
$g = 2 * $a;
$h = $e - $f;
$i = sqrt($h);
$j = $i / $g;
$positive = ($d + $i) / $g;
$negative = ($d - $i) / $g;
$answer = "The square of the equation is x = " . $positive . " or " . $negative;
echo $answer;

//   $h = 9;
//   $i = 5;
//   $j = $h-$i;
//   $k = sqrt($j);
//   echo $k;