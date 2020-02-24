<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.

// Set the database access information as constants:
define('DB_USER', 'root');
define('DB_PASSWORD', 'tiger');
define('DB_HOST', 'mysql:3306');
define('DB_NAME', 'sitename');


// Make the connection:
$dbc = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}