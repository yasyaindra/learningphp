<?php

function say_hello($name){
	return 'hello '.$name;
}
?>
<html>
<head>
	<title> Running Script </title>
</head>
<body>
<ul>
	<li> <?php echo say_hello('Indra Maulana '); ?> </li>
	<li> <?php echo say_hello('Idris Wahyu '); ?> </li>
	<li> <?php echo say_hello('Afifan Hakim '); ?> </li>
</ul>
</body>
</html>