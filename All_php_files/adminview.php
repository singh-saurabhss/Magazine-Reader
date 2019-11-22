<?php
$db = mysqli_connect("localhost" , "root", "", "web2");
session_start();

if (!$db) {

    die('Not able to connect to the database;');

}
if (!$_SESSION['email']) {
	header("location:login.html");
}
?>
<head>
<style>
body{
	background-color:grey;
}
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
<h1>Continue to view your file </h1>
<div class="container">

<form action="slider.php" method="post">
<input type="text" name="filename" placeholder="write file name here">
<input type="email" name="email" placeholder="put email address here">
<input type="submit" name="submit" value="View">
</form>
</div>
</body>