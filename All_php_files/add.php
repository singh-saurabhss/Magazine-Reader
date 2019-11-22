<?php
$db = mysqli_connect("localhost" , "root", "", "web2");
session_start();

if (!$db) {

    die('Not able to connect to the database;');

}
else{
	
}


?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>

    <div class="container" style="margin-top: 0px; width:100%; heigth:100%;">

        

        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <h3>Add File</h3>

                </div>

                <div style="padding: 10px;">

                    <form action="postadd.php" method="post"  enctype="multipart/form-data">

                        

                        <div class="form-group">

                            <label for="file_name">File Name</label>

                            <input type="text" name="file_name" required="required" class="form-control" value="">

                        </div>                       

                        <div class="form-group">

                            <label for="description">File Description (Optional)</label>

                            <input type="text" name="description" class="form-control" value="">

                        </div> 
						 
						<br>

                        <div class="form-group">

                            <label for="fileupload">Choose Images for Magazine or article</label>

                            <input type="file" name="file[]" multiple="">


                        </div>   

                        <input type="submit" name="submit" value="upload images" >

                    </form>

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