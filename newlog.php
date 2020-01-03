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
    
    <form action="newlog.php" method="POST">
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

</body>
</html>