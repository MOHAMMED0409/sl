<?php

include('./config.php');
// $conn=mysqli_connect("localhost","root","","signup");


    $name =  $_POST["name"]; 
    $last_name =  $_POST["last_name"]; 
    $email = $_POST["email"];
    $password =  $_POST["password"];

    $conn = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into sign_up(name, last_name, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $last_name, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
