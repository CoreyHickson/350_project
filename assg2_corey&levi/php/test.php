<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dnd";

//Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//Inserting
$sql = "INSERT INTO characters (name, class, charlevel, background, race) VALUES ('$_POST[name]','$_POST[class]', $_POST[level],'$_POST[background]','$_POST[race]')";

//Pass/Fail statement
if ($conn->query($sql) === TRUE) {
	echo "It worked record was created";
} else {
	echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>