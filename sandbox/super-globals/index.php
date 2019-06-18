<?php
//$name = $_GET

echo $_GET['id'];
?>
<html>
<head>
<title>
	Super Global
</title>
</head>
<body>
	<p> Here is the <?php echo htmlspecialchars ('<code>'); ?> tag</p>
	<h1> My Super Global </h1>
	 <?php
	// if (isset($_GET['id'])) {
	// 	echo htmlspecialchars ($_GET['id']);
	// } else {
	// 	echo 'somewhere IDK';
	// }
	 ?>

	 <a href="about.php"> about </a>
</body>
</html>