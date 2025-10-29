<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div user id="frm">
		<form action="process.php" method="post">
			<p>
				<label>username:</label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>user password:</label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" value="Login" />
			</p>
			
		</form>
		
	</div>

</body>
</html>