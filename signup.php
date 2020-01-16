<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <title>Signup</title>
</head>
<body>
	<div class = "card-panel teal lighten-2"><img src="ongc.png" height="60" width="60" style="float:left"/><h5 style="padding-left:15px">Sign Up</h5></div>
	<div class = "container">
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-Mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-confirm" placeholder="Confirm Password">
		<button><a href="baseindex.php">Back</a></button>
        <button type="submit" name="signup-submit">SignUp</button>
    </form>
	</div>
    
</body>
</html>
