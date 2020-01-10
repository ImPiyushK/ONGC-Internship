<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>

    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-Mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-confirm" placeholder="Confirm Password">
        <button type="submit" name="signup-submit">SignUp</button>
    </form>
    
</body>
</html>