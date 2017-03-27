<?php
$number = $_REQUEST["number"];
$button = $_REQUEST["button"];
$sum = $_REQUEST["sum"];
$biggest = $_REQUEST["biggest"];
$smallest = $_REQUEST["smallest"];
$count = $_REQUEST["count"];
if ($button==NULL || $button=="Start Over")
{
   $sum = 0;
   $count = 0;
   $biggest = NULL;
   $smallest = NULL;
}
else
{
   $sum += $number; // same as: $sum = $sum + $number;
   if ($biggest == NULL || $number > $biggest)
      $biggest = $number;
   if ($smallest == NULL || $number < $smallest)
      $smallest = $number;
   $count++;  // same as: $count=$count+1; or $count+=1;
   $average = $sum/$count;
}
echo <<< HERE
   <form>
      Number <input type="text" name="number">
      <input type="submit" name="button" value="Enter">
      <input type="submit" value="Start Over">
      <input type="hidden" name="sum" value="$sum">
      <input type="hidden" name="biggest" value="$biggest">
      <input type="hidden" name="smallest" value="$smallest">
      <input type="hidden" name="count" value="$count">
   </form>
HERE;
if ($button != NULL)
{
   echo "<h1>The last number entered was $number</h1>";
   echo "<h1>The number of values is $count</h1>";
   echo "<h1>The running sum is $sum</h1>";
   echo "<h1>The average is $average</h1>";
   echo "<h1>The biggest is $biggest</h1>";
   echo "<h1>The smallest is $smallest</h1>";
}
?>