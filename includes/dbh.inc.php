<?php

    $dbhost = "localhost";
    $username = "root";
    $password = "";
	$dbname = "dblogs";
	
    $conn = mysqli_connect("$dbhost", "$username", "$password","$dbname");
    
    if (mysqli_connect_errno()) {
        echo ("Failed to connect to MySQL: " . $conn  ->connect_error);
        exit();
    }
?>