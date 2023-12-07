<?php

$con = mysqli_connect("tagency.mysql.database.azure.com", "tina", "", "tagency");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

?>
