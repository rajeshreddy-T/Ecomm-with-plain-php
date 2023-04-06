<!-- db config -->
<?php
// Path: config.php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','project2user');
define('DB_PASS','raja');
define('DB_NAME','project2');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
