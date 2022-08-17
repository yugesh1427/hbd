<?php

$servername = "sql101.epizy.com";
$username = "epiz_32401924";
$password = "PG2JBUxeB6";
$dbname = "epiz_32401924_test";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);


    $data =  $_REQUEST['text1'];
// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

$sqlquery = "INSERT INTO dbdata VALUES
	('data')"

if ($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
