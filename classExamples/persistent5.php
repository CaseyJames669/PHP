<?php
$whichbutton = $_REQUEST["whichbutton"];
$temperature = $_REQUEST["temperature"];
$name = $_REQUEST["name"];

if ($whichbutton=="clear temperature")
   $temperature=NULL;

if ($whichbutton==NULL)
   nameform();
else
{
   mainform($name,$temperature);
   displayConversion($temperature, $whichbutton);
}
?>

<?php
// **********************************
// FUNCTIONS
function displayConversion($temperature,$whichbutton)
{
   if ($temperature != NULL)
   {
      if ($whichbutton == "Fahrenheit to Celsius")
      {
         $celsius = FahToCel($temperature);
         echo "<h1>$temperature Fahrenheit is $celsius Celsius</h1>";
      
      }
      elseif ($whichbutton == "Celsius to Fahrenheit")
      {
         $fahrenheit = CelToFah($temperature);
         echo "<h1>$temperature Celsius is $fahrenheit Fahrenheit</h1>";
      }
   }
}

function mainform($name, $temperature)
{
   echo <<< HERE
   <form>
      <h1>$name's Temperature Converter</h1>
      <h3>Temperature
      <input type="text" name="temperature" value="$temperature"
             autocomplete="off">
      </h3>
      <input type="submit" name="whichbutton" value="Fahrenheit to Celsius">
      <input type="submit" name="whichbutton" value="Celsius to Fahrenheit">
      <input type="submit" name="whichbutton" value="clear temperature">
      <input type="hidden" name="name" value="$name">
   </form>
HERE;
}

function nameform()
{
   echo <<< HERE
      <form>
      <h1>Enter your name:
      <input type="text" name="name" autocomplete="off"></h1>
      <input type="submit" name="whichbutton" value="begin">
      </form>
HERE;
}

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
