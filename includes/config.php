<?php 
// DB credentials.
define('DB_HOST','carrental-anassmamouni461-1058.a.aivencloud.com:18186');
define('DB_USER','avnadmin');
define('DB_PASS','AVNS_G4oYM0Kqv3klCJC3MqC');
define('DB_NAME','defaultdb');
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