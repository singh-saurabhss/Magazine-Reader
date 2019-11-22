<?php
session_start();
$connect=new mysqli("localhost","root","","web2");

if (!isset($_SESSION['name1'])) {

    header("location: home.html");

}

	session_destroy();
	header("location:home.html");

?>