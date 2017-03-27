<html>
<head>
<title>DB Example</title>
</head>
<body>

<?
extract($_POST);

// connect to the database, only needs to be done once
$conn = mysql_connect("localhost",$username,$password);
mysql_select_db($dbname, $conn);

// print the entire "pet" table, function is at the bottom
$sql = "select * from pet";
$result = mysql_query($sql,$conn);
printtable("pet",$result);

// print the entire "event" table, function is at the bottom
$sql = "select * from event";
$result = mysql_query($sql,$conn);
printtable("event",$result);

// Do a query that joins the two tables (similar as the query that
// was given in the on-line tutorial, then print as a table
$sql = "SELECT pet.name, pet.species,
     (YEAR(date)-YEAR(birth)) - (RIGHT(date,5)<RIGHT(birth,5)) AS AgeAtEvent,
     remark
     FROM pet INNER JOIN event
       ON pet.name = event.name
     WHERE event.type = 'litter'";
$result = mysql_query($sql,$conn);
printtable("Joining pet and event",$result);

echo "<br><br>";


// printtable will print an entire table stored in $result.  The label
// above the table is given as $tablename
function printtable($tablename,$result)
{
   //Display the entire table 
   echo <<< HERE
      <h1>Table: $tablename</h1>
      <table border="1">
      <tr>
HERE;

   // Print the table column headers
   while ($field = mysql_fetch_field($result))
   {
      echo "<th><b>$field->name</b></th>\n";
   }
   echo "</tr>\n";

   // Print each row.  $row is an associative array containing one
   // record in the table.
   while ($row = mysql_fetch_assoc($result))
   {
      echo "<tr>\n";   
      foreach($row as $field=>$value)
      {
         /* since the table has a border, put a blank (&nbsp;) in the variable
            if the database field is NULL so that the border of the table 
            cell will be displayed */
         if ($value==NULL) 
            $value="&nbsp;";  // &nbsp; is a space.
         echo "<td>$value</td>\n";
      }
      echo "</tr>\n";   
   }
   echo "</table>";
}

?>
</table>

</body>
</html>
