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
$email=$_SESSION['email'];
if(isset($_POST["submit"]))
{
	$file_name=$_POST["file_name"];
		$file_des=$_POST["description"];
	for($i=0;$i<count($_FILES["file"]["name"]);$i++)
	{
		
	$file=$_FILES["file"]["name"][$i];
	$tmp_name=$_FILES["file"]["tmp_name"][$i];
	$path="images/".$file;
	move_uploaded_file($tmp_name,$path);
	$query="insert into slider(file,des,image,email) values('$file_name','$file_des','$file','$email')";
	$run=mysqli_query($db,$query);
	}
	header("location:action3.php");
}


}
?>