<?php
//Php file to delete a existing class/division from the database

//Check if coming from a POST method
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//Include the DB Connection file
	require("../../Assets/db-conn.php");
	
	//Capture the info sent previously by POST Method
	$className = mysqli_real_escape_string($mysqli,$_POST["classdelete"]);

	// Sql query to retrieve entered class
	$sql = "SELECT * FROM class_master WHERE class_name='".$className."'";

   //Obtain result set
	$result = $mysqli->query($sql);

	// Check if the entered class exists and delete
	if($result->num_rows > 0)
	{
		$sql = "DELETE FROM class_master WHERE class_name='".$className."'";
		if($mysqli->query($sql))
		{
			echo "<script>alert('Division deleted successfully');</script>";
			header("refresh:0;url=../addClassMaster.php");
		}
		else
		{
			echo "<script>alert('Division can not be deleted');</script>";
			header("refresh:0;url=../addClassMaster.php");
		}
	} 
	else
	{
		echo "<script>alert('Division does not exist');</script>";
		header("refresh:0;url=../addClassMaster.php");
	}
}

?>
