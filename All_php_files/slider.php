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

$file1=$_POST['filename'];
$email1=$_SESSION['email'];
$email2=$_POST['email'];

$query="select * from `slider` where `file`='$file1' and `email`='$email1' or `email`='$email2'";
	$run=mysqli_query($db,$query);
$rowcount=mysqli_num_rows($run);
}
	?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





<body style="background-color:black">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php
  for($i=1;$i<=$rowcount;$i++){
	  $row=mysqli_fetch_array($run);
	  ?>
	  <?php
	  if($i==1){
		  ?>
    <div class="carousel-item active">
     <center> <img class="d-block" src="images/<?php echo $row["image"] ?>" alt="First slide" height="570px" width="600px"></center>
    </div>
	  <?php
	  }
	  else{
		  ?>
     <div class="carousel-item">
     <center> <img class="d-block" src="images/<?php echo $row["image"] ?>" alt="First slide" height="570px" width="600px"></center>
      </div>
	  <?php
	  }
	  ?>
	<?php
  }
	?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>