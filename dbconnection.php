<?php
define('DB_SERVER','sql5.freesqldatabase.com');
define('DB_USER','sql5423372');
define('DB_PASS' ,'j2IH9XJv3I');
define('DB_NAME', 'sql5423372');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

