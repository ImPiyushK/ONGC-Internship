<?php  
    require 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
    <form action="delete.php" method="POST">
        LogID to be deleted: <input type="textbox" name="id"><br>
        <button type="submit" name="delete">Delete</button>
    </form>

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