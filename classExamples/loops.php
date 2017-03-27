<?php
   extract($_GET);
   if ($button == NULL || $button == "back to form")
      displayform();
   else
   {
      whileloop($first,$last);
      dowhileloop($first,$last);
      forloop($first,$last);
      backform();
   }

// ***********************************************************
// FUNCTIONS

function displayform()
{
   echo <<< HERE
      <form>
         <h2>First value
            <input type="text" name="first" autocomplete="off">
         </h2>
         <h2>Last value
            <input type="text" name="last" autocomplete="off">
         </h2>
         <input type="submit" name="button" value="display">
      </form>
HERE;
}

function backform()
{
   echo <<< HERE
   <form>
      <input type="submit" name="$button" value="back to form">
   </form>
HERE;
}

function whileloop($first,$last)
{
   echo "<h2>Using a while loop: ";
   $i = $first;
   while ($i <= $last)
   {
      echo "$i ";
      $i++;
   }
   echo "</h2>";
}

function dowhileloop($first,$last)
{
   echo "<h2>Using a do while loop: ";
   $i = $first;
   do
   {
      echo "$i ";
      $i++;
   }
   while ($i <= $last);
   echo "</h2>";
}

function forloop($first,$last)
{
   echo "<h2>Using a for loop: ";
   for ($i=$first; $i<=$last; $i++)
      echo "$i ";
   echo "</h2>";
}

?>