<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'db-webmalta.mysql.database.azure.com');
define('DB_USERNAME', 'admin1');
define('DB_PASSWORD', 'Pa$$w0rd1234');
define('DB_NAME', 'users');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
