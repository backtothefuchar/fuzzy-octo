<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "charansuresh", "Pe9hae4i", "charansuresh");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysql->connect_errno);
    exit();
}	


echo "<table border=1px padding=5px>";
echo "<tr><th>Users</th></tr>";

$users = "SELECT user_id FROM Posts";
if ($result = $mysqli->query($users)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["user_id"] . "</td><tr>";
	}
}

echo "</table>";

$mysqli->close();
	
?>