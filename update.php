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
    <title>Update</title>
</head>
<body>
    <div class="card-panel teal lighten-2">
<h6> Update Log Record</h6></div>
	<div class="card-panel">
    <form action="update.php" method="POST">
        Log Id: <input type="text" name="lid" placeholder="Enter LogID to Update"><br>
        Well Name: <input type="text" name="wellName"><br>
        Field Name: <input type="text" name="fieldName"><br>
        County: <input type="text" name="county"><br>
        State/Location: <input type="text" name="state"><br>
        Scale: <input type="text" name="scale"><br>
        Name of Log: <input type="text" name="nameOfLog"><br>
        Bottom Logged Interval: <input type="number" step=0.1 name="bli"><br>
        Top Logged Interval: <input type="number" step=0.1 name="tli"><br>
        Remark: <input type="text" name="remark"><br>
        Company: <input type="text" name="company"><br>
        Box No: <input type="text" name="boxNo"><br>
        Packet No: <input type="text" name="packetNo"><br>
		<button><a href="index.php">Back</a></button>
        <button type="submit" name="signup-submit">Update</button>
    </form>
	</div>
    
    <?php
        $wellName = NULL;
        $fieldName = NULL;
        $county = NULL;
        $state = NULL;
        $scale = NULL;
        $nameofLog = NULL;
        $bli = NULL;
        $tli = NULL;
        $remark = NULL;
        $company = NULL;
        $boxNo = NULL;
        $packetNo = NULL;
        $id = NULL;

        if (isset($_POST['lid'])){
        $id = $_POST['lid'];
        }

        if (isset($_POST['wellName'])){
            $wellName = $_POST['wellName'];
        }


        if (isset($_POST['fieldName'])){
            $fieldName = $_POST["fieldName"];
        }

        if (isset($_POST['county'])){
            $county = $_POST["county"];
        }

        if (isset($_POST['state'])){
            $state = $_POST["state"];
        }

        if (isset($_POST['scale'])){
            $scale = $_POST["scale"];
        }
        if (isset($_POST['nameOfLog'])){
            $nameofLog = $_POST["nameOfLog"];
        }

        if (isset($_POST['bli'])){
            $bli = $_POST["bli"];
        }

        if (isset($_POST['tli'])){
            $tli = $_POST["tli"];
        }

        if (isset($_POST['remark'])){
            $remark = $_POST["remark"];
        }

        if (isset($_POST['company'])){
            $company = $_POST["company"];
        }

        if (isset($_POST['boxNo'])){
            $boxNo = $_POST["boxNo"];
        }

        if (isset($_POST['packetNo'])){
            $packetNo = $_POST["packetNo"];
        }
        if($id!=NULL)
        {
        $sql = "UPDATE `details` SET `Well Name` = '$wellName', `Field Name` = '$fieldName', `Name of Log` = '$nameofLog', `State/Location` = '$state', `County` = '$county', `Scale` = '$scale', `Bottom Logged Interval` = '$bli', `Top Logged Interval` = '$tli', `Remark` = '$remark', `Company` = '$company', `Box No` = '$boxNo', `Packet No` = '$packetNo' WHERE `LogID` = $id;";
        if(mysqli_query($conn, $sql))
            echo "Records Updated successfully.";
        else
            echo "ERROR: Could not able to execute $sql" . mysqli_connect_error($conn);
        }
    ?>
</body>
</html>
