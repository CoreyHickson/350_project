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

//Receiving
$sql = "SELECT name FROM characters";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) {
		echo $row["name"];
	}
}
else {
	echo "the search returned no results";
}

$conn->close();
?>