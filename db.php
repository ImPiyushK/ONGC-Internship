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
        </tr>

    <?php
        $sql = "SELECT * from details;";
        $results = mysqli_query($conn, $sql); 
        $resultCheck = mysqli_num_rows($results);
        if($resultCheck > 0)
        {
            while($row = mysqli_fetch_assoc($results))
            {
                echo "<tr><td>" . $row['LogID'] . "</td><td>" . $row['Well Name'] . "</td><td>" . $row['Field Name'] . "</td></tr>"; 
            }
    }   
    ?>
    </table>
</body>
</html>