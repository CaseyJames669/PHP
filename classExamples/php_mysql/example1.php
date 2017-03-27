<html>
<head>
<title>DB Example</title>
</head>
<body>
<?
extract($_POST);
$conn = mysql_connect("localhost",$username,$password);
mysql_select_db($dbname, $conn);
$sql = "select * from pet";
$result = mysql_query($sql,$conn);

// output the field names
echo "<h3>Field Names in the pet table</h3>";
while ($field = mysql_fetch_field($result))
{
   echo "$field->name<br>\n";
}

echo "<br><br>";

// output the records
echo "<h3>Records in the pet table</h3>";
echo "------------------<br>";
while ($row = mysql_fetch_assoc($result))
{
   foreach ($row as $col=>$val)
   {
      echo "$col - $val<br>\n";
   }
   echo "------------------<br>";
}
?>

</body>
</html>
