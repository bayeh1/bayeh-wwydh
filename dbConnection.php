<? php 
session_start();

$dbhost = "http://wwydh-mysql.cqqq2sesxkkq.us-east-1.rds.amazonaws.com/"; // this will ususally be 'localhost', but can sometimes differ

$dbname = "wwydh"; // the name of the database that you are going to use for this project

$dbuser = "wwydh_a_team"; // the username that you created, or were given, to access your database

$dbpass = "nzqbzNU3drDhVsgHsP4f"; // the password that you created, or were given, to access your database
 

mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

echo "Connected to MySQL";

?>
