<?php
	// php file to add students to database
	
	// Check the request method
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// Include the database connection file
		require("../../Assets/db-conn.php");

		//Capture the info sent previously by POST Method
		$enrollmentid= mysqli_real_escape_string($mysqli,$_POST["enrollmentid"]);
		$fname= mysqli_real_escape_string($mysqli,$_POST["fname"]);
		$lname= mysqli_real_escape_string($mysqli,$_POST["lname"]);

		// Check if enrollment already exists
		$sql = "Select enrollment_id from student_master where enrollment_id=".$enrollmentid;

		// Obtain result set
		$result = $mysqli->query($sql);

		if($result->num_rows > 0)
		{
			echo "<script>alert('Enrollment id already exists')</script>" ;
			header("refresh:0; url=../addStudentMaster.php");
		}
		else
		{
			// Insert student into database
			$sql = "insert into student_master values('$enrollmentid','$fname','$lname')";

			//Check if query executes successfully
			if($mysqli->query($sql))
			{
				echo "<script>alert('Student Added Successfully')</script>" ;
				header("refresh:0; url=../addStudentMaster.php");
			}
			else 
			{
				//echo $mysqli->error;
				echo "<script>alert('Student couldnt be added')</script>" ;
				header("refresh:0; url=../addStudentMaster.php");
			}
		}
	}

		
?>