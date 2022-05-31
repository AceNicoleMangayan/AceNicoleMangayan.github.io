<?php
//register.php
//Inserts new student record to tbl_students table in newbies_db database.
include("./SQLConnect.php");
echo"<pre>";
print_r($_POST);
echo"</pre>";

$query = mysqli_query($con,"INSERT INTO tbl_students (studID, lastName, firstName, MI,course,yearlevel) VALUES ('$_POST[stud_ID]','$_POST[lastName]','$_POST[firstName]','$_POST[MI]','$_POST[course]','$_POST[yearLevel]')") or die(mysql_error());
	if(!$query){
		echo "Alert! Student not added.";
	}
	else{
		echo "Student successfully added!";
	}
	
	echo "<a href='./index.php'><input type='button' value='Back'/></a>";

    echo "<br>----------------------------------------------------------------------------------<br>";
		echo "PHP-mysqli (Fetching data from the database using SELECT statement)";
	
		//Fetch data from table (e.g. tbl_students)
		//Retrieve
		
		$query = mysqli_query($con, "SELECT * FROM tbl_students WHERE status = 'Active'") or die(mysqli_error());
		echo "<br  ><br>";
		
		echo "<table border='1' style='border-collapse:collapse;background-color:green; color:#fff;'>
				<th>Student ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Middle Initial</th>
				<th>Course</th>
				<th>Year</th>
			 ";
		while($row = mysqli_fetch_array($query)){
			echo "<tr>
					<td>$row[studID]</td>
					<td>$row[lastName]</td>
					<td>$row[firstName]</td>
					<td>$row[MI]</td>
					<td>$row[course]</td>
					<td>$row[yearlevel]<br>
				  </tr>";
		}
		echo "</table>";
	
?>