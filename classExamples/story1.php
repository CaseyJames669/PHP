<?php
   extract($_GET);
   if ($button == NULL || $button == "clear story")
   {
      $story = NULL;
      $count = 0;
   }
   elseif ($button == "add line")
   {
      $count++;
      $story = $story . $count . ". " . $newline . "\n";
   }
      
   echo <<< HERE
      <h1>Story</h1>
      <form>
         <textarea rows="20" cols="40">$story</textarea>
         <br/>
         <input type="text" size="50" name="newline"
                autocomplete="off"><br/>
         <input type="submit" name="button" value="add line">
         <input type="submit" name="button" value="clear story">
         <input type="hidden" name="story" value="$story">
         <input type="hidden" name="count" value="$count">
      </form>
HERE;
?>