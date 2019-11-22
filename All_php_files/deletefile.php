
<?php
$db = mysqli_connect("localhost" , "root", "", "web2");
session_start();

if (!$db) {

    die('Not able to connect to the database;');

}
if (!$_SESSION['email']) {
	header("location:login.html");
}
else{
	

$file1=$_SESSION['file1'];
$email=$_SESSION['email'];


$fileQuery =  "SELECT  *  FROM slider  WHERE `file` = '$file1' and `email`='$email'";

$getFileResult = mysqli_query($db,$fileQuery );


if($getFileResult){
		$fileDeleteQuery = "DELETE FROM slider WHERE `file` = '$file1' and `email`='$email'";
		
		
  mysqli_query($db,$fileDeleteQuery);
	
	header("location: showfiles.php");
	
	
}
 else {

    die("ERROR: Only the user who created the file can delete it.");

}
}