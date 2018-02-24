<?php
//Php file to add a new class/division to the database

//Check if coming from a POST method
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//Include the DB Connection file
	require("../../Assets/db-conn.php");
	
	//Capture the info sent previously by POST Method
	$className = mysqli_real_escape_string($mysqli,$_POST["classadd"]);

	//Write an SQL Query
	$sql = "INSERT INTO class_master(class_name) VALUES('$className')";

	//Check if query executes successfully
	if($mysqli->query($sql)) {
		echo "<script>alert('Class Added Successfully')</script>" ;
		header("refresh:0; url=../addClassMaster.php");
	}else {
		//echo $mysqli->error;
		echo "<script>alert('Class couldnt be added')</script>" ;
		header("refresh:0; url=../addClassMaster.php");
	}

} else {
	echo "Error!";
}

?>