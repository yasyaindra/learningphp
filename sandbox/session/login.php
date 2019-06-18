<?php
session_start();

define('USERNAME','yasyaindra');
define('PASSWORD','1234');

if ($_SERVER['REQUEST_METHOD']=='POST') {
	//get their values
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//validating
	if ($username === USERNAME && $password === PASSWORD) {

	//login + set session
		$_SESSION['username'] = $username;
		header("Location:admin.php");
	} else {
		$status = 'Username/Password arent correct';
	}

}

// if (isset ($_POST['loginForm'])) {
// 	echo 'posted';
// }
?>

<html>
<head>
	<title> Login </title>
</head>
<body>
	<h1> Log In </h1>
	<form action="login.php" method="post">
		<ul>
			<li>
				<label for="username" name=> Username </label>
				<input text="name" name="username">
			</li>
			<li>
				<label for="password"> Password </label>
				<input type="password" name="password">
			</li>
			<li>
				<input type="submit" value="Log In" name="loginForm">
			</li>
		</ul>
	</form>
	<?php if ( isset($status)): ?>
	<?php echo $status; ?>
	<?php endif; ?>
</body>
</html>