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
	if(isset($_POST['submit'])){
		$old=$_POST['pass'];
		$email=$_SESSION['email'];
		$new=$_POST['pass1'];
		$query="update `table5` set `password`='$new' where `email`='$email' and `password`='$old'";
		$run=mysqli_query($db,$query);
		if($run){
			session_destroy();
			header("location:login.html");
		}
	}
	else{
		
	}
}
	


?>
<head>
<style>
.container{
	width:60%;
	margin-right:20%;
	margin-left:20%;
	margin-top:1%;
	height:300px;
	background-color:coral;
}
.container form{
	margin:15%;
	padding:5%;
}
.container form input{
	width:70%;
	color:black;
	height:30px;
}
.container form input[type="submit"]:hover{
	background-color:red;
	pointer:cursor;
}
h1{
	margin-top:50px;
	text-align:center;
	color:black;
}
</style>
</head>
<body>
<h1>Change your password here </h1>
<div class="container">

<form action="" method="post">
<input type="password" name="pass" placeholder="Type your current password here">
<input type="password" name="pass1" placeholder="which password do you want">
<input type="submit" name="submit" value="Proceed">
</form>
</div>
</body>

