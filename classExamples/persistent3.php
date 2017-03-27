<h1>Temperature Converter</h1>

<?php
$temperature = $_REQUEST["temperature"];
$whichbutton = $_REQUEST["whichbutton"];
   echo <<< HERE
   <form>
      <h3>Temperature
      <input type="text" name="temperature" autocomplete="off">
      </h3>
      <input type="submit" name="whichbutton" value="Fahrenheit to Celsius">
      <input type="submit" name="whichbutton" value="Celsius to Fahrenheit">
   </form>
HERE;
if (isset($whichbutton) && $temperature != NULL)
{
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

}

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