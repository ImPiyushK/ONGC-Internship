<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<?php
    echo "Hello ".$_SESSION['userUid']."<br>";
?>
<?php    
    if(!isset($_SESSION['id'])){
        header("Location: baseindex.php");
        exit();
    }
?>
    <a href="newlog.php">Create a new Log</a>
    <br>
    <a href="db.php">List of Table</a>
    <br>
    <a href="update.php">Update Log</a>
    <br>
    <a href="delete.php">Delete Record</a>
    <br>
    <form action="includes/logout.inc.php" method="POST">
        <button type="submit" name="logout-submit">Logout</button>
    </form>
</body>
</html>