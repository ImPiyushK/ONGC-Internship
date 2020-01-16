<?php  
    require 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <title>Delete</title>
</head>
<body>
	<div class = "card-panel teal lighten-2"><h6 style="padding-left:15px">Check LogID carefully before deleting!!</h6></div>
	<div class = "container">
    <form action="delete.php" method="POST">
        LogID to be deleted: <input type="textbox" name="id"><br>
	<button><a href="index.php">Back</a></button>
        <button type="submit" name="delete">Delete</button>
    </form>
	</div>
	

<?php
    if (isset($_POST['delete'])){
        $id = $_POST['id'];
        if($id!=NULL)
        {
            $sql = "DELETE FROM details WHERE LogID='$id';";
            if(mysqli_query($conn, $sql))
                echo "Records Deleted successfully.";
            else
                echo "ERROR: Could not able to execute $sql" . mysqli_connect_error($conn);
        }
    }
?>

</body>
</html>
