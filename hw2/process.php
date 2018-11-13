<?php

$servername = "localhost";

$username = "root";

$password = "print!@#";

$dbname = "KAKAO";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 


$sql="INSERT INTO jy (id, password, nickname, created) VALUES ('".($_POST['newID'])."', '".($_POST['newPW'])."', '".($_POST['newnick'])."', now())";


if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();



#header("Location: new.php");
	
?>
