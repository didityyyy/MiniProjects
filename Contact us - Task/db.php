<?php

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'contact_us');
define('PORT', '3306');

$conn = @mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME, PORT);

if ($conn->connect_error) {
    die('Database error:' . $conn->connect_error);
}