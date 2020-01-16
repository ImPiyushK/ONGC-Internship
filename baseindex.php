<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <title>Well Logs</title>
</head>
<body>
	 <div class = "card-panel teal lighten-2"><img src="ongc.png" height="60" width="60" style="float:left"/><h5 style="padding-left:15px">Well Logs Management System</h5></div>
	<div class = "container">
    <form action="includes/login.inc.php" method="POST">
			<label>Username:</label>
            <input type="text" name="mailuid" placeholder="Username/E-mail"><br>
			<label>Password:</label>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button type="submit" name="login-submit">Login</button>
    </form>
	<a href="signup.php">Signup</a>
	</div>

    
</body>
</html>
