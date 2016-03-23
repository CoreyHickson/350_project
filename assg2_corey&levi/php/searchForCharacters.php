<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dnd";



//Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection
if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}

//Receiving
$sql = "SELECT characters.name, characters.class, characters.charlevel, characters.background, characters.race, backgrounds.proficiency, classes.hit_die, classes.primary_ability, class_features.feature, class_features.description, races.size, races.base_speed FROM characters JOIN backgrounds ON characters.background = backgrounds.background JOIN classes ON characters.class = classes.class JOIN class_features ON characters.class = class_features.class JOIN races ON characters.race = races.race WHERE name = 'Biff'";

//Post variable here
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$name = $name." ".$row['name'];
		$background = $background." ".$row["background"];
		$charlevel = $charlevel." ".$row["charlevel"];
		$class =$class." ".$row["class"];
		$race = $race." ".$row["race"];
		
		echo $row["name"];
	}
} else {

}
$location = "../html/index.php?name=".$name."&background=".$background."&charlevel=".$charlevel."&class=".$class."&race=".$race;

echo $_POST['searchName'];

header("Location: ".$location);

$conn -> close();
?>