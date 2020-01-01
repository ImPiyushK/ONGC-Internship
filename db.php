<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Table</title>
</head>
<body>
    
    <?php
        $dbhost = "localhost";
        $username = "root";
        $password = "";
	    $dbname = "dblogs";
	
	    $conn = mysqli_connect("$dbhost", "$username", "$password","$dbname");
	    // Check connection
	    if (mysqli_connect_errno()) {
    		echo ("Failed to connect to MySQL: " . $con  ->connect_error);
	    	exit();
        }
    ?>

    <table>
        <tr>
            <th>LogID</th>
            <th>Well Name</th>
            <th>Field Name</th>
            <th>County</th>
            <th>State/Location</th>
            <th>Scale</th>
            <th>Name of Log</th>
            <th>Bottom Logged Interval</th>
            <th>Top Logged Interval</th>
            <th>Remark</th>
            <th>Company</th>
            <th>Box No</th>
            <th>Packet No</th>
        </tr>

    <?php
        $sql = "SELECT * from details;";
        $results = mysqli_query($conn, $sql); 
        $resultCheck = mysqli_num_rows($results);
        if($resultCheck > 0)
        {
            while($row = mysqli_fetch_assoc($results))
            {
                echo "<tr><td>" . $row['LogID'] . "</td><td>" . $row['Well Name'] . "</td><td>" . $row['Field Name'] . "</td><td>" . $row['State/Location'] . "</td><td>" . $row['County'] . "</td><td>" . $row['Name of Log'] . "</td><td>" . $row['Bottom Logged Interval'] . "</td><td>" . $row['Top Logged Interval'] . "</td><td>" . $row['Remark'] . "</td><td>" . $row['Company'] . "</td><td>" . $row['Box No'] . "</td><td>" . $row['Packet No'] . "</td></tr>"; 
            }
    }   
    ?>
    </table>
</body>
</html>