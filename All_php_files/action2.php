<html>
<head>
<title>upload</title>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
<input type="file" name="img[]" multiple="multiple"/>
<input type="submit" name="submit3">
</form>
<form action="#" method="POST" enctype="multipart/form-data">
<input type="submit" name="submit4">
</form>
<?php
$db=mysqli_connect("localhost","root","","web2");
if(isset($_POST['submit3'])){
	$filename=$_FILES['img']['name'];
	$tmpname=$_FILES['img']['tmp_name'];
	$filetype=$_FILES['img']['type'];
	for($i=0;$i<=count($tmpname)-1;$i++){
		$name=addslashes($filename[$i]);
		$tmp=addslashes(file_get_contents($tmpname[$i]));
		$query=("insert into table6(images,name) values('$tmp','$name')");
		$run=mysqli_query($db,$query);
		if($run){
	echo "data inserted successfully....";}
	else{
		echo "error:".mysqli_error($db);
	}
		
	}
}
if(isset($_POST['submit4'])){
	$query="select * from table6";
	$result=$db->query($query);
		while($row=$result->fetch_assoc()){
			echo '<img src="".$row["images"]."" width="250px" height="250px">';
}}
?>
</body>
</html>