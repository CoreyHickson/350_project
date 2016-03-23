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

// Data validation for levels
if($_POST[level] < 1 || $_POST[level] > 20) {
	echo '<script> language="javascript">';
	echo 'alert("Please enter a level between 1 and 20.")';
	echo '</script>';
} else {
	// Submitting the form
	$sql = "INSERT INTO characters (name, class, charlevel, background, race) VALUES ('$_POST[name]','$_POST[class]', $_POST[level],'$_POST[background]','$_POST[race]')";

	//Pass/Fail statement
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Character created.")';
		echo '</script>';
	} else {
		echo "Error: " .$sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>