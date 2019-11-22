<?php
$db=mysqli_connect("localhost","root","","dynamicsslider");
if(isset($_REQUEST["submit"])){
	for($i=0;$i<count($_FILES["file"]["name"]);$i++)
	{
	$file=$_FILES["file"]["name"][$i];
	$tmp_name=$_FILES["file"]["tmp_name"][$i];
	$path="images/".$file;
	move_uploaded_file($tmp_name,$path);
	$query="insert into slider(image) values('$file')";
	$run=mysqli_query($db,$query);
	}
}
?>
<form method="post" enctype="multipart/form-data">
Image upload:
<input type="file" name="file[]" multiple="">
<input type="submit" name="submit" value="upload image" >
</form>
