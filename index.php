<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
           
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<div class="card-panel teal lighten-2">
<h5>
<?php
    echo "Hello ".$_SESSION['userUid']."<br>";
?>
<?php    
    if(!isset($_SESSION['id'])){
        header("Location: baseindex.php");
        exit();
    }
?></h5>
</div>
	<div class ="app container collection-item">
    <a class = "center blue-text"" href="newlog.php">Create a new Log</a>
    <br>
    <a class ="center blue-text" href="db.php">List of Table</a>
    <br>
    <a class="center blue-text" href="update.php">Update Log</a>
    <br>
    <a className="center blue-text" href="delete.php">Delete Record</a>
   </div>
    <br>
    <form action="includes/logout.inc.php" method="POST">
        <button type="submit" name="logout-submit">Logout</button>
    </form>
</body>
<style>
body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #eee;
}
.app{
  max-width: 700px;
  margin: 20px auto;
  padding: 10px 20px 10px;
}
.collection-item{
  background: #fff;
}
.collection-item span:hover{
  cursor: pointer;
  text-decoration: line-through;
}

form{
  margin: 20px 10px;
}
</style>
</html>
