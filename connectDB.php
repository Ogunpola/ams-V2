<?php
/* Database connection settings 
	$servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "nodemculog";

*/

    $servername = "remotemysql.com";
    $username = "tn8WHrpiLh";		//put your phpmyadmin username.(default is "root")
    $password = "xJ1yRK32Tv";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "tn8WHrpiLh";
    
	$conn = new mysqli($servername, $username, $password, $dbname);
	global $conn;
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>