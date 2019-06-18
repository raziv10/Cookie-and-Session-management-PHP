<?php
session_start();
include("connect.php");
?>
<html>
<head>
	<title>Student Form</title>
	<style>
		.label
		{
			float: left;
			width: 90px;
		}
		.profile_container
		{
			width: 1000px;
			height: 430px;
			background: rgba(0,0,0,0.4);/* Setting transparent background to the container only*/
			padding: 10px;
			color: white;
			margin: auto;
			margin-top: 70px; 
			text-align: center;
		}
		.text
		{
			text-align: center;
			color: red;
			letter-spacing: 2px;
			margin-top: 10px;
		}
		.text2
		{
			text-align: left;
			color: white;
			letter-spacing: 2px;
		}
	</style>
</head>
<body bgcolor="cyan">
	<div class="profile_container">
		<h1 class="text">Student Registration Form</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="text2">
				<label><span class="label">Name:</span></label>
				<input type="text" name="name" size="30"></br></br></br>
				<label><span class="float">Username:</span></label>
				<input type="text" name="username" size="30"></br></br></br>
				<label><span class="float">Password:</span></label>
				<input type="password" name="password" size="30"></br></br></br>
				<span class="label">Course:</span><select name="Course" style="width: 240px;"><option value="Computing">Computing</option><option value="Networking">Networking</option><option value="Multimedia">Multimedia</option>option></select><br/></br></br>
				<label><span class="float" >Address:</span></label>
				<input type="text"  name="address" size="30"></br></br></br>
				<label><span class="float" >Upload photo:</span></label>
				<input type="file" name="uploadfile" value=""/></br></br></br>
				<input type="submit" name="submit" value="Submit"/>

		</div>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$n=$_POST['name'];
	$un=$_POST['username'];
	$pw=$_POST['password'];
	$cu=$_POST['Course'];
	$adr=$_POST['address'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "Student/".$filename;
	move_uploaded_file($tempname,$folder);
	if($n!="" && $un!="" && $pw!="" && $cu!="" && $adr!="" && $filename!="")
	{
		$query="INSERT INTO student (Name,Username,Password,CourseType,Address,PicSource) VALUES ('$n','$un','$pw','$cu','$adr','$filename')";
		if(!mysqli_query($connect,$query))
		{
			echo "The values are not inserted";
		}
		else
		{
			echo "The values are inserted";
		}
		if($_SESSION['check']=="Admin")
		{

 			header("refresh:1; url=Admin.php");/*If the admin has to add the student then admin is redirected to admin page not the form page*/
			exit();
		}
		else
		{
			header("refresh:1; url=Login.php");
			exit();
		}

	}
}
else
{
	echo "<font color='red'>**All Fields are Required.";
}

?>