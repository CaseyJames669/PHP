<form>
<?php
   extract($_GET);
   include("teams.php");
/*
   foreach ($teams as $team=>$nickname)
      echo "<h3>$team $nickname</h3>";
*/
   if ($button == NULL)
      $count = 0;
   else
      $count++;
      
//   echo "<h1>count = $count</h1>";

if ($count < count($teams) )
{
   $team = nextTeam($teams,$count);
   echo "<h1>$team $teams[$team]</h1>";
}
else
   echo "<h1>Done</h1>";
   
   echo <<< HERE
   <input type="hidden" name="count" value="$count">
   <input type="submit" name="button" value="next">
HERE;

function nextTeam($teams,$count)
{
   reset($teams);
   for ($i=0; $i<$count; $i++)
      next($teams);
   return key($teams);
}

?>
</form>

