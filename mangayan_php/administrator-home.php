<?php include("./templates/header.php");?>	
<?php include("./templates/sidebar.php");?>	
<?php include("./SQLConnect.php");?>
	<div id="main-container">
		<?php echo "Welcome Admin!";?>
		<ul>
		<li><a href='#'>Home</a></li>
		<li><a href='#'>Accounts</a></li>
		<li><a href='#'>Operations</a></li>
		<li><a href='./index.php'>Logout</a></li>
		</ul>

        <?php
        echo "<br>----------------------------------------------------------------------------------<br>";
        echo "(DELETE USER)";
        echo "<br><br>";
        echo "<table border='1' style='border-collapse:collapse;background-color:green; color:#fff;'>
                <th>Student ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Initial</th>
                <th>Course</th>
                <th>Year</th>
                <th>Status</th>
                <th>Action</th>
            ";
        $query1 = mysqli_query($con, "SELECT * FROM tbl_students WHERE status = 'Active'") or die(mysqli_error());
        while($row = mysqli_fetch_array($query1)){
            echo "<tr>
                    <td>$row[studID]</td>
                    <td>$row[lastName]</td>
                    <td>$row[firstName]</td>
                    <td>$row[MI]</td>
                    <td>$row[course]</td>
                    <td>$row[yearlevel]<br>
                    <td>$row[status]</td>
                    <td align='center'><a style='text-decoration:none;' href='delete.php/?id=$row[studID]'>X</a></td>
            </tr>";
            }
        echo "</table><br><br>"
        ?>

        <?php
        echo "<br>----------------------------------------------------------------------------------<br>";
        echo "(UPDATE USER)";
        echo "<br><br>";
		
		$query2 = mysqli_query($con, "SELECT * FROM tbl_students WHERE status = 'Active'") or die(mysqli_error());
		
		echo "<table border='1' style='border-collapse:collapse;background-color:green; color:#fff;'>
				<th>Student ID</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Middle Initial</th>
				<th>Course</th>
				<th>Year</th>
                <th>Status</th>
			 ";
		while($row = mysqli_fetch_array($query2)){
			echo "<tr>
					<td>$row[studID]</td>
					<td>$row[lastName]</td>
					<td>$row[firstName]</td>
					<td>$row[MI]</td>
					<td>$row[course]</td>
					<td>$row[yearlevel]<br>
                    <td>$row[status]</td>
				  </tr>";
		}
		echo "</table>";
        ?>

        <div>
        <form method="POST" action="update.php">	
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
			<input type ="submit" name="btn_update" value="Update"/>
			</td>
		</tr>
		</table>
	</form>
    </div>
        
    </div>

    <?php
     echo "<br><br>";
     echo "<br><br>";
     echo "<br><br>";
    ?>

<?php include("./templates/footer.php");?>

