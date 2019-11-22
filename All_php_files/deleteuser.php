<?php





$db = mysqli_connect("localhost" , "root", "", "web2");
session_start();

if (!$db) {

    die('Not able to connect to the database;');

}
if (!$_SESSION['email']) {
	header("location:adminlogin.php");
}

$user_email= $_SESSION['email1'];



$fileQuery =  "SELECT  *  FROM `table5` WHERE `email` = '$user_email';";

$getFileResult = mysqli_query($db,$fileQuery );
$fileQuery1 =  "SELECT  *  FROM `slider` WHERE `email` = '$user_email';";

$getFileResult1 = mysqli_query($db,$fileQuery );


if($getFileResult && $getFileResult1 ){
		$userDeleteQuery = "DELETE FROM `table5` WHERE `email` = '$user_email'";
		$userDeleteQuery1 = "DELETE FROM `slider` WHERE `email` = '$user_email'";
		
		
  
  
  mysqli_query($db,$userDeleteQuery);
  mysqli_query($db,$userDeleteQuery1);
	
	header("location: showuser.php");
	
	
}
 else {

    die("ERROR: Only employee can delete it.");

}