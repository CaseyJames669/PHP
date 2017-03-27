<?php

$x = 9;
$y = 10;

echo "<h1>$x $y</h1>";
example($x,$y);
echo "<h1>$x $y</h1>";

function example($a,&$b)
{
   $a = 99;
   $b = 100;
}
?>
