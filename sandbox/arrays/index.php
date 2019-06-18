<?php
$yasya_pride = array(
	'Script'=>'d:\script',
	'Music'=>'D:\music',
	'Video'=>'D:\video',
	'Materi'=>'d:\materi',
	'Ngaji'=>'d:\ngaji'
	);
?>
<html>
<head>
	<title> Array </title>
</head>
<body>
	<h1> yasyapride </h1>
	<ul>
		<?php foreach($yasya_pride as $cabang => $url) {
			echo "<li> <a href=\'$url'\> $cabang </li>" ;
		}
		?>
	</ul>
</body>
</html>