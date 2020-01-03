<?php  
    include_once 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Log</title>
</head>
<body>
    
    <form action="newlog.php" method="GET">
        Well Name: <input type="textbox" name="wellName"><br>
        Field Name: <input type="textbox" name="fieldName"><br>
        County: <input type="textbox" name="county"><br>
        State/Location: <input type="textbox" name="state"><br>
        Scale: <input type="textbox" name="scale"><br>
        Name of Log: <input type="textbox" name="nameOfLog"><br>
        Bottom Logged Interval: <input type="number" step=0.1 name="bli"><br>
        Top Logged Interval: <input type="number" step=0.1 name="tli"><br>
        Remark: <input type="textbox" name="remark"><br>
        Company: <input type="textbox" name="company"><br>
        Box No: <input type="textbox" name="boxNo"><br>
        Packet No: <input type="textbox" name="packetNo"><br>
        <input type="Submit">
    </form>

    <?php


        if (isset($_GET['wellName'])){
            $wellName = $_GET['wellName'];
        }


        if (isset($_GET['fieldName'])){
            $fieldName = $_GET["fieldName"];
        }

        if (isset($_GET['county'])){
            $county = $_GET["county"];
        }

        if (isset($_GET['state'])){
            $state = $_GET["state"];
        }

        if (isset($_GET['scale'])){
            $scale = $_GET["scale"];
        }
        if (isset($_GET['nameOfLog'])){
            $nameofLog = $_GET["nameOfLog"];
        }

        if (isset($_GET['bli'])){
            $bli = $_GET["bli"];
        }

        if (isset($_GET['tli'])){
            $tli = $_GET["tli"];
        }

        if (isset($_GET['remark'])){
            $remark = $_GET["remark"];
        }

        if (isset($_GET['company'])){
            $company = $_GET["company"];
        }

        if (isset($_GET['boxNo'])){
            $boxNo = $_GET["boxNo"];
        }

        if (isset($_GET['packetNo'])){
            $packetNo = $_GET["packetNo"];
        }  
        if($wellName!=NULL)
        {
        $sql = "INSERT INTO details (`Well Name`, `Field Name`, `State/Location`, `County`, `Scale`, `Name of Log`, `Bottom Logged Interval`, `Top Logged Interval`, `Remark`, `Company`, `Box No`, `Packet No`) VALUES ('$wellName', '$fieldName', '$state', '$county', '$scale', '$nameofLog', '$bli', '$tli', '$remark', '$company', '$boxNo', '$packetNo');";
        if(mysqli_query($conn, $sql))
            echo "Records inserted successfully.";
        else
            echo "ERROR: Could not able to execute $sql" . mysqli_connect_error($conn);
        }
    ?>

</body>
</html>