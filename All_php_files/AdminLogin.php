<?php
$con = mysqli_connect("localhost" , "root", "", "web2");
session_start();

if (!$con) {

    die('Not able to connect to the database;');

}

	if(isset($_POST['submit'])){
		$name=$_POST['name1'];
		$email1=$_POST['email'];
		$password=$_POST['password'];
		$query="select email from admin where `email`='$email1' and `password`='$password'";
		$run=mysqli_query($con,$query);
		$rowc=mysqli_num_rows($run);
		if($rowc >0){
			$_SESSION['email']=$_POST['email'];
			header("location:showuser.php");
		}
	
	else{
		header("location:home.html");
	}
	}

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="">
    <style>
    *{
    padding: 0px;
        margin: 0px;}
        body{
            background-image: url("magazine1.jpg");
            background-size: cover;
            font-family: sans-serif;
            background-repeat: no-repeat;
        }
        .box{
            position: absolute;
            left: 50%;
            top: 50%;
            background-color: black;
            transform: translate(-50%,-50%);
            width: 350px;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 20px;
            box-shadow: 0 15px 15px rgba(0,0,0,.5);
        }
        h2{
            text-align: center;
            margin: 0 0 30px;
            padding: 0px;
            color: white;
            
        }
        .box .inputbox{
            position: relative;
        }
       
        .box .inputbox input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            margin-bottom: 10px;
            border: none;
            outline: none;
            background:transparent;
            border-bottom: 1px solid white;
        }
         .box .inputbox label{
            position: absolute;
            left: 0;
            top: 0;
             padding: 10px 0;
            font-size: 16px;
            color: white;
            pointer-events: none;
            transition: .5s;
            
        }
        .box .inputbox input:focus~label, .box .inputbox input:valid~label{
            top: -20px;
            left: 0;
            color: deepskyblue;
            font-size: 12px;
        }
        .box input[type="submit"]{
            margin-top: 10px;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            background:grey;
            padding: 10px 40px;
            border-radius: 5px;
            cursor: pointer;
            
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Admin Login</h2>
        <form  action="" method="post">
            <div class="inputbox">
                <input name="name1" type="text" required>
                <label>Admin name</label>
            </div>
			<div class="inputbox">
                <input name="email" type="email" required>
                <label>Admin email</label>
            </div>
            <div class="inputbox">
                <input  name="password" type="password" required>
                <label>password</label>
            </div>
           
                <input  name="submit" type="submit" value="submit">
        
        </form>
    </div>
</body>
</html>