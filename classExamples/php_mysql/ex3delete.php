<html>
<head>
<title>DB Example</title>
</head>
<body>
<?
extract($_POST);

if ($button == "delete entry") // prompt for name and owner
{

   echo <<< HERE
   <form method="post" action="ex3delete.php">
   <h3>Name <input type="text" name="name"></h3>
   <h3>Owner <input type="text" name="owner"></h3>
   <input type="submit" name="button" value="delete">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}
else // attempt to delete
{
   if (!( $database = mysql_connect( "localhost", $username, $password)))
      die( "Could not connect to database" );
   // open the database
   if ( !mysql_select_db( $dbname, $database ) )
      die( "Could not open $dbname database" );

   $query = "DELETE from pet where name = '$name' and owner = '$owner'";
   echo "<h4>query: $query</h4>"; 
   if ( !( $result = mysql_query( $query, $database ) ) ) {
      echo "Could not execute query! <br />";
      die( mysql_error() );
   }
   else 
      echo "$name deleted from pet database if record existed.";
   echo <<< HERE
   <form method="post" action="example3.php">
   <input type="submit" name="button" value="return">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}

?>
</body>
</html>
