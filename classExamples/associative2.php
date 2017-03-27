<form>
<?php
   extract($_GET);
   include("teams.php");
   if ($button=="clear")
      $team = NULL;
   echo <<< HERE
   <h2>American League Team
       <input type="text" name="team" value="$team" autocomplete="off">
   </h2>
   <input type="submit" name="button" value="submit">
   <input type="submit" name="button" value="clear">
HERE;
   if ($button == "submit")
   {
      $nickname = $teams[$team];
      if ($nickname == NULL)
         echo "<h2>$team not found</h2>";
      else
         echo "<h2>$team $nickname</h2>";
   }

?>
</form>

