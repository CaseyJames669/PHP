<?php
   $num1 = $_REQUEST["num1"];
   $num2 = $_REQUEST["num2"];
   $sum = $num1+$num2;
   echo "<h1>$num1 + $num2 = " . ($num1+$num2) . "</h1>";
   echo "<table border=\"1\">";
   echo "<tr>";
   echo "<td>$num1</td>";
   echo "<td>+</td>";
   echo "<td>$num2</td>";
   echo "<td>=</td>";
   echo "<td>" . ($num1+$num2) . "</td>";
   echo "</tr>";
   echo "</table>";
?>

<table border="1">
<tr>
<td>
<?php echo $num1 ?> </td>
<td>+</td>
<td> <?php echo $num2 ?> </td>
<td>=</td>
<td> <?php echo $num1+$num2 ?> </td>
</tr>
</table>


<?php
print <<< HERE
   <table border="1">
      <tr>
         <td>$num1</td>
         <td>+</td>
         <td>$num2</td>
         <td>=</td>
         <td>$sum</td>
      </tr>
   </table>
HERE;
?>

<form action="form2.html">
   <input type="submit" value="back to form">
</form>
