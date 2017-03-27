<?php
$whichbutton = $_REQUEST["whichbutton"];

if ($whichbutton == "button1")
   echo"<h1>you clicked the first button</h1>";
elseif ($whichbutton == "button2")
{
   echo"<h1>you clicked the second button</h1>";
}
elseif ($whichbutton == "button3")
{
   echo"<h1>you clicked the third button</h1>";
}
else
   echo"<h1>you clicked the fourth button</h1>";


?>