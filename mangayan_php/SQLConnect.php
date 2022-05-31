<?php
//Connection String
	$con = mysqli_connect("localhost", "root", ""); //Host name, Username, Password :NO
							
	//Test connection to database
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error()); // If not connected
	}
	else
    {
	    echo "<br><br>Status: Connected to phpmyadmin"; //If connected
	}
 
	$db = mysqli_select_db($con,"dt_php"); //Select a specific database
	if(!$db)
    {
		die('<br>No Database: ' . mysqli_error()); // If not connected
	}
	else
    {
		echo "<br>Connected to Database.";
	}
?>