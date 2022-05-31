<?php
//delete.php

include("./SQLConnect.php");
// $query = mysql_query("DELETE FROM tbl_student WHERE stud_ID = '".$_GET['id']."'") or die(mysql_error());
$query = mysqli_query($con,"Update tbl_students SET status='Deleted' WHERE studID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{
	echo"Record successfully deleted";
}

echo "<a href='../index.php'><input type='button' value='Back'/></a>";
?>