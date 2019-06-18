<?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		setcookie ('fontSize', (int) $_POST['fontSize'], time() + 60*60);
	}
?>
<!doctype html>
<html>
<head>
	<title> Font </title>
</head>
<style type="text/css"> 
	body {font-size:<?= $_COOKIE['fontSize']. 'px'; ?>
	}
	li {list-style:none;} 
	ul, li {margin:0; padding:0;}
</style>

<body>
	<form action="" method="post">
		<ul>
			<li>
		<label for='text' value="text"> Ukuran berapa </label> </br>
		<select type='font-size' id='font-size'>
			<option value='10'> 10 </option>
			<option value='20'> 20 </option>
			<option value='40'> 30 </option>
			<option value='50'> 50 </option>
			<option value='60'> 60 </option>
		</select> </br>
			<input type="submit" name="submit" value="submit">
			</li>
		</ul>
	<h2> My Page </h2>
	<p> I just wanna stay in the sun where I find
I know it's hard sometimes
Pieces of peace in the sun's peace of mind
I know it's hard sometimes
Yeah, I think about the end just way too much
But it's fun to fantasize
All my enemies who wouldn't wish who I was
But it's fun to fantasize
Oh, oh
I'm falling so I'm taking my time on my ride
Oh, I'm falling so I'm taking my time on my ride
Taking my time on my ride </p>
	
</body>
</html>