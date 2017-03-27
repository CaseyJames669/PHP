<?php

$n = "John Doe";
greeting2($n);
greeting();

greeting();
greeting2("Dan");

$a = 34;
$b = 19;

echo "<h1>The bigger of $a and $b is " . bigger($a,$b)  . "</h1>";
$x = 43;
$y = 98;
echo "<h1>The bigger of $x and $y is " . bigger($x,$y)  . "</h1>";

// **********************************************************
// FUNCTIONS

function greeting()
{
   echo "<h1>Hello</h1>";
}

function greeting2($name)
{
   echo "<h1>Hello, $name</h1>";
}

function bigger($x,$y)
{
   if ($x > $y)
      $big = $x;
   else
      $big = $y;
   return $big;
}


?>