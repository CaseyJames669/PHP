<?php

extract($_GET);
if ($button==NULL || $button=="New Player")
   nameform();
elseif ($button=="Enter" || $button=="Restart")
{
   $compscore = 0;
   $userscore = 0;
   $ties = 0;
   displayheader();
   displayscore($compscore, $userscore, $name, $ties);
   echo <<< HERE
      <form>
         <input type="submit" name="button" value="Start Game">
HERE;
   passdata($name,$compscore,$userscore,$ties);
   echo "</form>";
}
elseif ($button=="Start Game" || $button=="Roll Again")
{
   displayheader();
   displayscore($compscore, $userscore, $name, $ties);
   $comp1 = rand(1,6);
   $comp2 = rand(1,6);
   displaydice("Computer",$comp1,$comp2);
   echo "<h2>$name's Roll:</h2>";
   echo <<< HERE
      <form>
         <input type="submit" name="button" value="Roll Dice">
         <input type="hidden" name="comp1" value="$comp1">
         <input type="hidden" name="comp2" value="$comp2">
HERE;
   passdata($name,$compscore,$userscore,$ties);
   echo "</form>";
}
elseif ($button=="Roll Dice")
{
   displayheader();
   $user1 = rand(1,6);
   $user2 = rand(1,6);
   $usertotal = $user1+$user2;
   $comptotal = $comp1+$comp2;
   if ($usertotal > $comptotal)
      $userscore++;
   elseif ($comptotal > $usertotal)
      $compscore++;
   else
      $ties++;
   displayscore($compscore, $userscore, $name, $ties);
   displaydice("Computer",$comp1,$comp2);
   displaydice($name,$user1,$user2);
   if ($usertotal > $comptotal)
      echo "<h1>$name Wins!!!</h1>";
   elseif ($comptotal > $usertotal)
      echo "<h1>Computer Wins!!!</h1>";
   else
      echo "<h1>It's a Tie!!!</h1>";
   echo <<< HERE
      <form>
         <input type="submit" name="button" value="Roll Again">
         <input type="submit" name="button" value="Restart">
         <input type="submit" name="button" value="New Player">
HERE;
   passdata($name,$compscore,$userscore,$ties);
   echo "</form>";
}

function passdata($name,$compscore,$userscore,$ties)
{
   echo <<< HERE
      <input type="hidden" name="name" value="$name">
      <input type="hidden" name="compscore" value="$compscore">
      <input type="hidden" name="userscore" value="$userscore">
      <input type="hidden" name="ties" value="$ties">
HERE;
}

function displayheader()
{
   echo "<h1>Highest Roll Wins!</h1>";
}

function displayscore($compscore, $userscore, $name, $ties)
{
   echo <<< HERE
      <h2>Computer's Score: $compscore<br/>
          $name's Score: $userscore<br/>
          Ties: $ties</h2>
HERE;
}

function displaydice($who,$d1,$d2)
{
   $total = $d1+$d2;
   echo <<< HERE
      <h2>$who's Roll: $total<br/>
      <img src="die$d1.jpg">
      <img src="die$d2.jpg"></h2>
HERE;
}

function nameform()
{
   echo <<< HERE
      <h1>Enter your name to play a dice game!</h1>
      <form>
         <h2>Name <input type="text" name="name" autocomplete="off"></h2>
         <input type="submit" name="button" value="Enter"> 
      </form>
HERE;
}

?>
