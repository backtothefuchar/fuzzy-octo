<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "charansuresh", "Pe9hae4i", "charansuresh");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysql->connect_errno);
    exit();
}	


if(!empty($_POST['posts'])) {
	foreach($_POST['posts'] as $post) {
		$query = "DELETE FROM Posts WHERE post_id='" . $post . "'";
		if ($result = $mysqli->query($query)) {
			echo "<p>Deleted post with ID " . $post . "</p>";
		}
	}
}

	
?>