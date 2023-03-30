<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";
$username = "itms";
$password = "gelasgelaskaca@2021";
$dbname="db_aset";

      $koneksi = mysql_connect('localhost', 'itms', 'gelasgelaskaca@2021');
        $db = mysql_select_db('db_aset');

	// Create connection
	global $conn;
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>
