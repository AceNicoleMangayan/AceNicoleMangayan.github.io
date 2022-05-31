<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>PHP-MySQL Activity</title>
</head>
<body>
	<style>
		a{color:#fff;}
		a:hover{background-color:yellow; color:black;}
	</style>
</head>
<body bgcolor="#dddeee">
<?php include("./templates/header.php");?>	
<?php include("./SQLConnect.php");?>
	<?php 
		//PHP-MySQL Activity
	?>
<table border="1" width="100%">
<tr><td width="50%">
    <div>
    <?php	
		echo "<br>----------------------------------------------------------------------------------<br>";
		echo "PHP-mysqli (Inserting data to the database using INSERT statement)";
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
    </div>

    <div>
    <form method="POST" action="register.php">	
		<table>
		<tr>
			<td><input type ="text" name="stud_ID" placeholder="Student ID"></td>
			<td><input type ="text" name="firstName" placeholder="First Name"></td>
			<td><input type ="text" name="lastName" placeholder="Last Name"></td>
			<td><input type ="text" name="MI" placeholder="Middle Initial"></td>
		</tr><tr>
			<td><input type ="text" name="course" placeholder="Course"></td>
			<td><input type ="text" name="yearLevel" placeholder="Year Level"></td>
			</tr><tr>
			<td colspan="4">
			<input type ="submit" name="btn_register" value="Register"/>
			</td>
		</tr>
		</table>
	</form>
    </div>

    <div>
    </td><td valign="top">
	<?php //second column?>
	<form method="POST" action="login.php">
	<table align="center" style="padding-top:100px;">
		<tr><td>Username:</td><td><input type="text" name="uname"></td></tr>
		<tr><td>Password:</td><td><input type="text" name="pwd"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" name="btn_login" value="LOGIN"></td></tr>
	</table>
	</form>
	
	<table border="1" width="100%" height="500px">
		<tr>
			<td>
				<table>
					<tr>
					<?php
						$query2 = mysqli_query($con,"SELECT * FROM tbl_students") or die(mysqli_error());
						while($row = mysqli_fetch_array($query2)){
							echo "<td style='color:#fff;background-color:green;height:200px;width:200px;'>
										<img src='./images/ustp.png' height='130px' width='150px'><br>
										ID: $row[studID]<br>
										Lastname: $row[lastName]<br>
										firstname: $row[firstName]
								 </td>";
						}
					?>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</td></tr>
</table>
</div>

</body>
</html>