<?php
session_start();
include("connect.php");
?>
<html>
<head>
	<title>Student Update Form</title>
	<style>
		.label
		{
			float: left;
			width: 90px;
		}
		.profile_container
		{
			width: 1000px;
			height: 540px;
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
		<form action="" method="get" enctype="multipart/form-data">
			<div class="text2">
				<label><span class="label">S.N:</span></label>
				<input type="text" name="symbol" size="30" value="<?php echo $_GET['sn'];?>"></br></br></br>
				<label><span class="label">Name:</span></label>
				<input type="text" name="name" size="30" value="<?php echo $_GET['nam'];?>"></br></br></br>
				<label><span class="float">Username:</span></label>
				<input type="text" name="username" size="30" value="<?php echo $_GET['usr'];?>"></br></br></br>
				<label><span class="float">Password:</span></label>
				<input type="password" name="password" size="30" value="<?php echo $_GET['pwd'];?>"></br></br></br>
				<span class="label">Course:</span><select name="Course" value="<?php echo $_GET['cty'];?>" style="width: 240px; " ><option value="Computing">Computing</option><option value="Networking">Networking</option><option value="Multimedia">Multimedia</option>option></select><br/></br></br>
				<label><span class="float" >Address:</span></label>
				<input type="text"  name="address" size="30" value="<?php echo $_GET['add'];?>"></br></br></br>
				<label><span class="float" >Upload photo:</span></label>
				<input type="file" name="uploadfile" value="<?php echo $_GET['pcs'];?>"/></br></br></br>
				<input type="submit" name="submit" value="Update"/>

		</div>
		</form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{

	$symbol=$_GET['symbol'];
	$name=$_GET['name'];
	$username=$_GET['username'];
	$password=$_GET['password'];
	$Course=$_GET['Course'];
	$address=$_GET['address'];
	$picsource=$_GET['uploadfile'];

	$query="UPDATE student SET Name='$name',Username='$username',Password='$password',CourseType='$Course',Address='$address',PicSource='$picsource' WHERE SN='$symbol'";
	$data=mysqli_query($connect,$query);
	if(isset($data))
	{
		echo "<font color='green' font size='8'>Record Updated Sucessfully.";
		header("refresh:2;url=Admin.php");
		exit();

	}
	else
	{
			echo "<font color='red' font size='8'>Record Not Updated Sucessfully.";
	}
 	
}
else
{
	echo "<font color='red'>**All Fields are Required.";
}
?>
</div>