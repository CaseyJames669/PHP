<?php
extract($_GET);
session_start();
if (isset($_SESSION['numbers']))
   $numbers = $_SESSION['numbers'];
if ($button == NULL || $button == "new numbers")
   $numbers = createArray();
elseif ($button == "add one")
   addone($numbers);
elseif ($button == "double")
   double($numbers);
elseif ($button == "sort ascendingly")
   sort($numbers);
elseif ($button == "sort descendingly")
   rsort($numbers);
displayArray($numbers);
echo <<< HERE
   <form>
      <input type="submit" name="button" value="keep numbers">
      <input type="submit" name="button" value="add one">
      <input type="submit" name="button" value="double">
      <input type="submit" name="button" value="sort ascendingly">
      <input type="submit" name="button" value="sort descendingly">
      <input type="submit" name="button" value="new numbers">
HERE;


echo "</form>";

$_SESSION['numbers'] = $numbers;

function addone(&$numbers)
{
   for ($i=0; $i<count($numbers); $i++)
      $numbers[$i] += 1;
}

function double(&$numbers)
{
   for ($i=0; $i<count($numbers); $i++)
      $numbers[$i] *= 2;
}

function createArray()
{
   for ($i=0; $i<5; $i++)
      $numbers[$i] = rand(1,100);
   return $numbers;
}

function displayArray($numbers)
{
   echo "<h1>";
   for ($i=0; $i<count($numbers); $i++)
      echo "$numbers[$i] ";
   echo "</h1>";
}
   
      
?>