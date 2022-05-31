<?php

include("./SQLConnect.php");
echo"<pre>";
print_r($_POST);
echo"</pre>";

$query3 = mysqli_query($con, "Update tbl_students SET lastName='" . $_POST['lastName'] . "', firstName='" . $_POST['firstName'] . "', MI='" . $_POST['MI'] . "' , course='" . $_POST['course'] . "' , yearlevel='" . $_POST['yearLevel'] . "' WHERE studID='" . $_POST['stud_ID'] . "'") or die(mysqli_error());

	if(!$query3){
		echo "Alert! Student not added.";
	}
	else{
		echo "Student successfully added!";
	}
	
	echo "<a href='./index.php'><input type='button' value='Back'/></a>";
?>
