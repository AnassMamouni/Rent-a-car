<?php 
// DB credentials.
define('DB_HOST','sql.freedb.tech:3306');
define('DB_USER','freedb_anass');
define('DB_PASS','7dBcBgrY$NEU8?w');
define('DB_NAME','freedb_location');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>