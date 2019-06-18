<?php
// setcookie ('fontSize',120);
setcookie ('prefs[fontSize]',25);
setcookie ('prefs[favoriteCategory]',25);
setcookie ('prefs[screenWidth]',25);
?>

<html>
<head>
	<title> Cookies </title>
</head>
<style type="text/css">
	body { font-size: <?= $_COOKIE['fontSize']; ?>
}
</style>
<body>
	<p> do u feel the same? </p>
	<?php
	if ( isset($_COOKIE['prefs'])) {
		foreach ($_COOKIE['prefs'] as $key => $val) {
		echo '<li>'. htmlspecialchars($key) . ':' . htmlspecialchars($val
			);
		}
	} else {
		echo 'hilang';
	}
	?>
</body>
</html>