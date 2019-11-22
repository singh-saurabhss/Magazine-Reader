<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cart</title>
    <link rel="stylesheet" href="main.css">
</head>
<body class="cart">
<?php
			session_start();
$connect=new mysqli("localhost","root","","web2");

    $name1=$_POST['name1'];
	$pass=$_POST['password'];
	$query="select name from table5 where email='$name1' and password='$pass'";
	$result=$connect->query($query);
	if($result->num_rows>0){
		
		while($row=$result->fetch_assoc()){
		$_SESSION['email']=$_POST['name1'];
		header('location:action3.php');
		}
	}
	else{
	echo "<script>alert('user name or password is wrong');</script>";
	header('location:login.html');
	}
	?>

</body>
</html>
