<?php
	$whichMus = $_POST["pickamuseum"]; 
	$query = "SELECT * FROM workofart WHERE whichmus='" . $whichMus . "';";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("databases query on art pieces failed. ");
	}
	echo "<ul>";
	while ($row = mysqli_fetch_assoc($result)) {
 		echo "<li>" . $row['artname'] . ' BY ' . $row['artist'] . "</li>";
	}
	echo "</ul>";
	mysqli_free_result($result);	
?>
