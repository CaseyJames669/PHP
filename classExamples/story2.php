<?php
   extract($_GET);
   if ($button == NULL || $button == "back to name form")
      nameform();
   else
   {
      if ($button == "go" || $button == "clear story")
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
         <h1>$name's Story</h1>
         <form>
            <textarea rows="20" cols="40">$story</textarea>
            <br/>
            <input type="text" size="50" name="newline"
                  autocomplete="off"><br/>
            <input type="submit" name="button" value="add line">
            <input type="submit" name="button" value="clear story">
            <input type="submit" name="button" value="back to name form">
            <input type="hidden" name="story" value="$story">
            <input type="hidden" name="count" value="$count">
            <input type="hidden" name="name" value="$name">
         </form>
HERE;
   }

function nameform()
{
   echo <<< HERE
      <form>
      <h1>Enter your name
      <input type="text" name="name"></h1>
      <input type="submit" name="button" value="go">
      </form>
HERE;
}
?>