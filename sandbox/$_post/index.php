<?php
// if ( !empty ($_POST)) {
// 	print_r ($_POST);
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ( mail ('indra@google.com','New Website Message', htmlspecialchars($_POST['message'])) ) {
		$status = "Thanks for your message.";
	}

}

?>

<html>
<head>
	<title> Post </title>
<style>
	form ul {margin:0;padding:0;}
	form li {list-style:none;margin-bottom:1em;}
</style>

</head>
<body>
	<h1> Contact Form </h1>
	<form action="" method="post">
			<ul>
		<li>
			<label for="name"> Name : </label>
			<input type="text" name="name" id="name">
		</li>
		<li>
			<label for="email"> Email : </label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="message"> Message : </label><br>
			<textarea name="message" id="message"></textarea>
		<li>
		<input type="submit" value="Go!">
		</li>
			</ul>
	</form>
<?php if (isset($status)) echo $status; ?>

</body>
</html>