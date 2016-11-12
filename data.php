<?php require('dbconfig.php');

 if($_SERVER["REQUEST_METHOD"] == "POST") {
 	$name = $_POST["name"];
 	$email = $_POST["email"];
 	$dept = $_POST["dept"];
 	$reg = $_POST["reg"];
 	// echo $name;
 	// echo $email;

 	$sql = "INSERT INTO info (name, email, dept, reg)
 	VALUES ('$name', '$email', '$dept', '$reg')";

 	if($conn->query($sql)==true){
// 		echo "Your Data has been created Succesfully";
  		$message = "Your Data has been created Succesfully";
		header('Location: form.php?meg='.$message);
 	} else {
 		$message = "Something went wrong";
 		header('Location: form.php?meg='.$message);
 	}

 	$conn->close();

 }

 ?>

