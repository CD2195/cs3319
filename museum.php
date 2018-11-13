<!DOCTYPE html>
<html>
<head>
	<title>Worldwide Museums</title>
	<link rel="stylesheet" type="text/css" href="museum.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<?php
 include "connecttodb.php";
?>
<h1>Museums of the World </h1>
Select your museum:
<select>
  <option value="1">Select Here</option>
	<?php
	 include "getmuseum.php";
	?>
</select>

<hr>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>
