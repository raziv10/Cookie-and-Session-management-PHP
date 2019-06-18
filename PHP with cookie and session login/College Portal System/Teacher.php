<?php
session_start();
include("connect.php");
?>
<html>
<head>
	<title>Teacher Form</title>
	<style>
		.label
		{
			float: left;
			width: 90px;
		}
		.profile_container
		{
			width: 1000px;
			height: 480px;
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
<body bgcolor="grey">
	<div class="profile_container">
		<h1 class="text">Teacher Registration Form</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="text2">
				<label><span class="label">Name:</span></label>
				<input type="text" name="name" size="30"></br></br></br>
				<label><span class="float">Username:</span></label>
				<input type="text" name="username" size="30"></br></br></br>
				<label><span class="float">Password:</span></label>
				<input type="password" name="password" size="30"></br></br></br>
				<span class="label">Department:</span><select name="Department" style="width: 240px;"><option value="Computing">Computing</option><option value="Networking">Networking</option><option value="Multimedia">Multimedia</option>option></select><br/></br></br>
				<label><span class="label">Salary:</span></label>
				<input type="text" name="salary" size="30"></br></br></br>
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
	$dpt=$_POST['Department'];
	$slr=$_POST['salary'];
	$adr=$_POST['address'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "Teacher/".$filename;
	move_uploaded_file($tempname,$folder);
	if($n!="" && $un!="" && $pw!="" && $dpt!="" && $slr!="" && $adr!="" && $filename!="")
	{
		$query="INSERT INTO teacher (Name,Username,Password,Department,Salary,Address,PicSource) VALUES ('$n','$un','$pw','$dpt','$slr','$adr','$filename')";
		if(!mysqli_query($connect,$query))
		{
			echo "The values are not inserted";
		}
		else
		{
			echo "The values are inserted";
		}
		if($_SESSION['check'] == "Admin")
		{

 			header("refresh:1; url=Admin.php");/*If the admin has to add the teacher then admin is redirected to admin page not the form page*/
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