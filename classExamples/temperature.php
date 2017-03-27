<?php
   $temperature = $_REQUEST["temperature"];
   $whichbutton = $_REQUEST["whichbutton"];

   if ($whichbutton == "Fahrenheit to Celsius")
   {
      $celsius = FahToCel($temperature);
      echo "<h1>$temperature Fahrenheit is $celsius Celsius</h1>";
      
   }
   else
   {
      $fahrenheit = CelToFah($temperature);
      echo "<h1>$temperature Celsius is $fahrenheit Fahrenheit</h1>";
   }

echo <<< HERE
   <form action="temperature.html">
      <input type="submit" value="back to form">
   </form>
HERE;

?>

<?php
// **********************************
// FUNCTIONS
function FahToCel($fahrenheit)
{
      $celsius = ($fahrenheit-32)*5/9;
      return $celsius;
}

function CelToFah($celsius)
{
      return $celsius*9/5+32;
}

?>