<html>
<head>
<title>DB Example</title>
</head>
<body>
<?
$dbname = "bladowca_asmt14"; // replace with your database name
$username = "bladowca";  // replace with your username
$password = "Braindead1";  // replace xxxxx with your password, nobody can see it
extract($_POST);

if ($button == "add entry") // prompt for the information to add
{
   echo <<< HERE
   <form method="post" action="ex3add.php">
   <h3>Name <input type="text" name="name"></h3>
   <h3>Owner <input type="text" name="owner"></h3>
   <h3>Species <input type="text" name="species"></h3>
   <h3>Sex <input type="text" name="sex"></h3>
   <h3>Birth <input type="text" name="birth"></h3>
   <h3>Death <input type="text" name="death"></h3>
   <input type="submit" name="button" value="add new entry">
   <input type="hidden" name="username" value="$username">
   <input type="hidden" name="password" value="$password">
   <input type="hidden" name="dbname" value="$dbname">
   </form>
HERE;
}
else // add the new entry to the pet table in the database
{
   if (!( $database = mysql_connect( "localhost", $username, $password)))
      die( "Could not connect to database" );
   // open the database
   if ( !mysql_select_db( $dbname, $database ) )
      die( "Could not open $dbname database" );

   if ($death != NULL)
   {
      $query = "INSERT INTO pet(name,owner,species,sex,birth,death) VALUES (";
      $query = $query . "'$name','$owner','$species','$sex','$birth','$death')";
   }
   else // if $death is NULL, do not include it or the date becomes 0000-00-00 
   {
      $query = "INSERT INTO pet(name,owner,species,sex,birth) VALUES (";
      $query = $query . "'$name','$owner','$species','$sex','$birth')";
   }
   echo "<h4>query: $query</h4>"; 
   if ( !( $result = mysql_query( $query, $database ) ) ) {
      echo "Could not execute query! <br />";
      die( mysql_error() );
   }
   else 
      echo "$name added to pet database.";
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
