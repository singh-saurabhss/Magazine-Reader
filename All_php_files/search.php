<?php
session_start();
$connect=new mysqli("localhost","root","","web2");

if (!isset($_SESSION['name1'])) {

    header("location:login.html");

    die();

} else {
if(isset($_POST['searchbtn'])){
	$value=$_POST['search'];
	$value=strtolower($value);
	if($value=='magazine' || $value=='magazines'){
		header("location:login.html");
	}
	else if($value=='stories' || $value=='story'){
		header("location:home.html");
	}
	else if($value=='newspaper' || $value=='newspapers'){
		header("location:logout.php");
	}
	else{
		echo'<script>alert("search not found");</script>';
		header("location:action3.php");
		
}}

}
?>