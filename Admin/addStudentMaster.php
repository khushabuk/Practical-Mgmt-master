<html>
	<h3>Add a Student</h3>
	<form method="post" action="php/addStudentMaster.php">
		Enter Enrollment Number:<input type="text" id="enrollmentid" name="enrollmentid">
		<br>
		Enter First Name:<input type="text" id="fname" name="fname"><br>
		Enter Last Name:<input type="text" id="lname" name="lname"><br>
		<input type="submit" value="submit"><br><br>
 	</form>

 	<h3>Delete a Student</h3>
 	<form method="post" action="php/deleteStudentMaster.php"> 
 		Enter Enrollment Number:<input type="text" id="enrollmentid" name="enrollment_delete">
 		<input type="submit" name="submit">
 	</form>
</html>