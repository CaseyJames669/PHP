<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSIS 311 - Server-Side Scripting - Brekke - 688</title>
<link rel="stylesheet" type="text/css" href="../main.css" />
</head>

<body>
<div id="page">

<div id="header">
	<h1>CSIS 311 - Casey Bladow</h1>
</div>

<div id="menu">
  <p>
    <ul>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/">Home</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt1/index.html">Assignment 1</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt2/index.html">Assignment 2</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt3/index.html">Assignment 3</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt4/index.html">Assignment 4</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt5/index.php">Assignment 5</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt6/index.html">Assignment 6</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt7/index.html">Assignment 7</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt8/index.html">Assignment 8</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt9/index.html">Assignment 9</a><br/></li>
    <li><a href="http://puff.mnstate.edu/~bladowca/private/asmt10/index.html">Assignment 10</a><br/></li>
	<li><a href="http://puff.mnstate.edu/~bladowca/private/asmt11/index.php">Assignment 11</a><br/></li>
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">

<?php
// ********************** wordwrap ***********************
$string = "The quick brown fox jumps over the lazy dog.";
$newtext = wordwrap($string, 20, "<br />\n");
   print <<< HERE
      <h3>wordwrap — Wraps a string to a given number of characters</h3>
      <ul>
      <li>\$string: $string
      <li>Example:
          <ul>
          <li>\$newtext = wordwrap(\$string, 20, "<\br />\\n");
          </ul>
      <li>Result: <br />
	  $newtext<br />
	  </ul>
HERE;

// ********************** strtoupper ***********************
$string = "The quick brown fox jumps over the lazy dog.";
$newtext = strtoupper($string);
   print <<< HERE
      <h3>strtoupper — Make a string uppercase</h3>
      <ul>
      <li>\$string: $string
      <li>Example:
          <ul>
          <li>\$newtext = strtoupper(\$string);
          </ul>
      <li>Result: <br />
	  $newtext<br />
	  </ul>
HERE;

// ********************** strtolower ***********************
$string = "The QUICK Brown foX jumps oVEr the laZy Dog.";
$newtext = strtolower($string);
   print <<< HERE
      <h3>strtolower — Make a string lowercase</h3>
      <ul>
      <li>\$string: $string
      <li>Example:
          <ul>
          <li>\$newtext = strtolower(\$string);
          </ul>
      <li>Result: <br />
	  $newtext<br />
	  </ul>
HERE;

// ********************** strlen ***********************
$string = "abcdef";
$newtext = strlen($string);
   print <<< HERE
      <h3>strlen — Get string length</h3>
      <ul>
      <li>\$string: $string
      <li>Example:
          <ul>
          <li>\$newtext = strlen(\$string);
          </ul>
      <li>Result: <br />
	  $newtext<br />
	  </ul>
HERE;

// ********************** money_format ***********************
$number = 1234.56;
setlocale(LC_MONETARY, 'en_US');
$newnumber = money_format('%i', $number);
   print <<< HERE
      <h3>md5 — Calculate the md5 hash of a string</h3>
      <ul>
      <li>\$number: $number
      <li>Example:
          <ul>
		  <li>setlocale(LC_MONETARY, 'en_US');</li>
          <li>\$newnumber = money_format('%i',\$number);
          </ul>
      <li>Result: <br />
	  $newnumber<br />
	  </ul>
HERE;

// ********************** crypt ***********************
$string = "easyPassword";
$hashed_password = crypt($string);
   print <<< HERE
      <h3>crypt — One-way string hashing</h3>
      <ul>
      <li>\$hashed_password: $string
      <li>Example:
          <ul>
          <li>\$hashed_password = crypt(\$string);
          </ul>
      <li>Result: <br />
	  $hashed_password<br />
	  </ul>
HERE;

// ********************** htmlentities ***********************
$string = "A 'quote' is <b>bold</b>";
$converted = htmlentities($string);
   print <<< HERE
      <h3>htmlentities — Convert all applicable characters to HTML entities</h3>
      <ul>
      <li>\$string: $string
      <li>Example:
          <ul>
          <li>\$converted = htmlentities(\$string);
          </ul>
      <li>Result: <br />
	  $converted<br />
	  </ul>
HERE;

// ********************** html_entity_decode ***********************
$orig = "I'll \"walk\" the <b>dog</b> now";
$a = htmlentities($orig);
$b = html_entity_decode($a);
   print <<< HERE
      <h3>html_entity_decode — Convert all HTML entities to their applicable characters</h3>
      <ul>
      <li>\$orig: $orig
      <li>Example:
          <ul>
          <li>\$a = htmlentities(\$orig);
		  <li>\$b = html_entity_decode(\$a);
          </ul>
      <li>Result: <br />
	  $a<br />
	  $b<br />
	  </ul>
HERE;

// ********************** md5_file ***********************
$file = "index.php";
$converted = md5_file($file);
   print <<< HERE
      <h3>md5_file — Calculates the md5 hash of a given file</h3>
      <ul>
      <li>\$file: $file
      <li>Example:
          <ul>
          <li>\$converted = md5_file(\$file);
          </ul>
      <li>Result: <br />
	  	MD5 file hash of $file: $converted<br />
	  </ul>
HERE;

// ************************* explode *************************
   $string = "The quick brown fox jumps over the lazy dog.";
   print <<< HERE
      <h3>explode - split a string into multiple parts</h3>
      <ul>
      <li>\$string: $string
      <li>example:
          <ul>
          <li>\$words = explode(" ",\$string); // creates array of words
          </ul>
      <li>result:<br>
HERE;
   $words = explode(" ",$string);
   foreach($words as $word)
      print $word . "<br>";
   print "</ul>";

// ************************* implode *************************
   $string = "The quick brown fox jumps over the lazy dog.";
   $newstring = implode("***",$words); 
   print <<< HERE
      <h3>implode- puts array items into a string</h3>
      <ul>
      <li>array: \$words created by <b>explode</b> above
      <li>example:
          <ul>
          <li>\$newstring = implode("***",\$words); // separates each word with ***
          </ul>
      <li>result: $newstring<br>
      </ul>
HERE;

// ********************** strpos ***********************
$mystring = 'abcabcabc';
$findme   = 'a';
$pos = strpos($mystring, $findme);
   print <<< HERE
      <h3>strpos — Find the position of the first occurrence of a substring in a string</h3>
      <ul>
      <li>\$mystring: $mystring
	  <li>\$findme: $findme
      <li>Example:
          <ul>
          <li>\$pos = strpos(\$mystring, \$findme);
          </ul>
      <li>Result: <br />
	  	The 1st position of $findme is: $pos<br />
	  </ul>
HERE;

// ********************** strrpos ***********************
$mystring = 'abcabcabc';
$findme   = 'a';
$pos = strrpos($mystring, $findme);
   print <<< HERE
      <h3>strrpos — Find the position of the last occurrence of a substring in a string</h3>
      <ul>
      <li>\$mystring: $mystring
	  <li>\$findme: $findme
      <li>Example:
          <ul>
          <li>\$pos = strrpos(\$mystring, \$findme);
          </ul>
      <li>Result: <br />
	  	The last position of $findme is: $pos<br />
	  </ul>
HERE;
?>




<form action="../index.html">
<input type="submit" name="backToindex" value="Home"/>
</form>

<form action="../asmt11/viewphp.php">
<input type="submit" name="viewphp" value="View PHP Source"/>
</form>

</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>
