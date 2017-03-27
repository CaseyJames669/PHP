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
    <li><a href="mailto:bladowca@mnstate.edu">Email</a></li>
    </ul>
    <br/>
  </p>
</div>

<div id="main">

<p>Lets have some fun with your birthday...</p>

<form method="POST" action="whichbutton.php">

<h4>Month:</h4>
      <input type="radio" name="month" value="1" />January<br/>
      <input type="radio" name="month" value="2" />February<br/>
      <input type="radio" name="month" value="3" />March<br/>
      <input type="radio" name="month" value="4" />April<br/>
      <input type="radio" name="month" value="5" />May<br/>
      <input type="radio" name="month" value="6" />June<br/>
      <input type="radio" name="month" value="7" />July<br/>
      <input type="radio" name="month" value="8" />August<br/>
      <input type="radio" name="month" value="9" />September<br/>
      <input type="radio" name="month" value="10" />October<br/>
      <input type="radio" name="month" value="11" />November<br/>
      <input type="radio" name="month" value="12" />December<br/>

<h4>Day:
    <select name="day">
		<option value="01">1</option>
		<option value="02">2</option>
        <option value="03">3</option>
		<option value="04">4</option>
        <option value="05">5</option>
		<option value="06">6</option>
        <option value="07">7</option>
		<option value="08">8</option>
        <option value="09">9</option>
		<option value="10">10</option>
        <option value="11">11</option>
		<option value="12">12</option>
        <option value="13">13</option>
		<option value="14">14</option>
        <option value="15">15</option>
		<option value="16">16</option>
        <option value="17">17</option>
		<option value="18">18</option>
        <option value="19">19</option>
		<option value="20">20</option>
        <option value="21">21</option>
		<option value="22">22</option>
        <option value="23">23</option>
		<option value="24">24</option>
        <option value="25">25</option>
		<option value="26">26</option>
        <option value="27">27</option>
		<option value="28">28</option>
        <option value="29">29</option>
		<option value="30">30</option>
        <option value="31">31</option>
	</select></h4>
    
<h4>Year:
	<input type="number" name="year" min="1900" max="2014" value="1900" /> </h4>
	  
	  <input type="submit" name="submit" value="Submit Date"> <br/>    
	
</form>
      
<form action="../index.html">
<input type="submit" name="backToindex" value="Home"/>
</form>

<?php
echo "<HR />";
highlight_file("index.php");
?>


</div>

<div id="footer">
	<p class="copyright">&copy; 2014 Casey Bladow</p>
</div>

</div>
</body>
</html>
