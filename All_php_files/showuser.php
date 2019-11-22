<?php


$db = mysqli_connect("localhost" , "root", "", "web2");
session_start();

if (!$db) {

    die('Not able to connect to the database;');

}
if (!$_SESSION['email']) {
	header("location:adminlogin.php");
}
 else {

    $admin_email = $_SESSION['email'];
	 $getQuery = "SELECT * FROM `slider`";

        $result = mysqli_query($db,$getQuery);
		$row1 = mysqli_fetch_array($result);
 

}


?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Files</title>




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</style>


</head>

<body>
<h1><a href="logout.php">Logout Admin</a></h1>

    <div class="container" style="margin-top: 50px; ">

        <div class="col-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3>Files</h3>

                </div>

                <div style="padding: 10px;">

                    <br>

                

                    <br>

                    <table class="table table-bordered">

                      <thead class="thead-dark" style="background: #2e6fa7; color: white;">

                        <tr>

                          <th scope="col">#</th>
                          <th scope="col">user</th>
                          <th scope="col">Name</th>

                          <th scope="col">Description</th>
						  <th scope="col">Control</th>


                        </tr>

                      </thead>

                      <tbody>

                        <?php $count = 0; ?>

                        <?php 
						
								 $_SESSION['file1']=$row1['file'];
								  $_SESSION['email1']=$row1['email'];
							while($row = mysqli_fetch_array($result)){
								if($_SESSION['file1']!=$row['file']){
									$_SESSION['file1']=$row['file'];
								}
								if($_SESSION['email1']!=$row['email']){
									$_SESSION['email1']=$row['email'];
								}
							?>
							
                            <?php                             

                                $count++;
                             ?>
                             
                            <tr>

                              <th scope="row"><?php echo $count; ?></th>
							  <td><?php echo $row['email']; ?></td>
                               <td><?php echo $row['file']; ?></td>
                              <td><?php echo $row['des']; ?></td>

                             
                              <td>
                              <?php
                              
							 
							  
                                ?>
                              
							   <a href="adminview.php"><button class="btn btn-sm btn-primary">View</button></a> 
							   
							   
                                  
								<?php if ( $_SESSION['email']): ?>  
                                  

                                    <a  href="deletefile.php"><button class="btn btn-sm btn-danger">Delete</button></a> 
									 <a  href="deleteuser.php"><button class="btn btn-sm btn-danger">Delete User</button></a> 

                                  <?php endif ?>
								
                            </tr>

							<?php
							} 
							
							?>

                      </tbody>

                    </table>

                </div>

            </div>

        </div>

        <!-- adding footer -->

        <footer style="margin-top: 100px;">

            

        </footer>

        <!-- footer end -->

    </div> 

    <!-- End Container     -->
</body>
</html>
