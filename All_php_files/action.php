<?php
$db=mysqli_connect("localhost","root","","web2");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$pass=$_POST['password'];
//$query1="select email from table5 where `email`='$email'";
	//$run1=mysqli_query($db,$query1);
	//if($run1){
		//header("location:signin.html");
	//}
	$query="insert into table5(name,email,address,contact,password) values('$name','$email','$address','$contact','$pass')";
	$run=mysqli_query($db,$query);
	if($run){
	echo '<body style="background-image:url("magazine.jpg")"><div style="height:100px;width:100%;background-color:coral;"><h1 style="color:white;text-align:center;margin-top:150px">data inserted successfully....login now<h1></div></body>';
	}
	else{
		echo "error:".mysqli_error($db);
	}
	}
	//else{
		//$_SESSION['msg']="Email already exist";
		//header("location:signin.html");
?>
<html>
<head>
<title>register</title>
<style>
body{
	background-color:black;
}
</style>
</head>
<body style="background-color:black;width:100%,height:200px;color:white;text-align:center;">
<a  href="login.html"><button style="width:80px;height:30px;font-size:13px;color:white;text-align:center;background-color:grey;margin-left:45%;margin-top:.5%">Login here</button>
</a>
</body>
</html>
