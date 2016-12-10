<?php

//start session
session_start();

//connect to database
include("includes/openDbConn.php");

//get data from form
$userID = $_POST["UserID"];
$password = md5($_POST["Passwd"]);

//form query to check credentials
$sql = "SELECT * FROM user_356Project2 WHERE UserID='".$userID."' AND Password='".$password."'";

//call query 
$result = mysql_query($sql);

//check to make sure there is a result 
if(empty($result))
{
	$num_records = 0;
}
else
{
	$num_records = mysql_num_rows($result);
}

//close connection to the database
include("includes/closeDbConn.php");

//if there's a record then login is successful
if($num_records ==1)
{
	CleanUp();
	$_SESSION["errorMessage"] = "";
	$_SESSION["login"]        = $userID;
	header("Location:success.php");
	exit;
}
else
{
		CleanUp();
		$_SESSION["errorMessage"] = "Either your login or password were incorrect";
		header("Location:index.php");
		exit;
}

//clear variables
 function CleanUp()
 {
	$userID   = "";
	$sql      = "";
	$result   = "";
	$num_records   = "";
	$password   = "";
	 
 }
 
 ?>