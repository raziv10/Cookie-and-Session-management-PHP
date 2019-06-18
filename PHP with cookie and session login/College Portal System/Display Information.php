<?php
session_start();
include("connect.php");
if($_SESSION['check']=='Student')
{

	$user_name=$_SESSION['username'];
	$query="SELECT * FROM student WHERE Username ='$user_name'";
	$data=mysqli_query($connect,$query);
	$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display page</title>
		<style>
		.profile_pic
		{
			border-radius: 50%; /*To make the image look round in shape*/
			height: 200px;
			width: 200px;
			text-align: center;

		}
		.profile_container
		{
			width: 800px;
			height: 550px;
			background: rgba(0,0,0,0.4);/* Setting transparent background to the container only*/
			padding: 10px;
			color: white;
			margin: auto;
			margin-top: 50px; 
			text-align: center;
		}
		.label
		{
			float: auto;
			width: 180px;

		}
    </style>
</head>
<body bgcolor="cyan">
	<div class="profile_container">
		<img src="<?php echo "Student/".$result['PicSource'];?>" height="200" width="200" class="profile_pic" ></br></br></br></br>
		<label><span class="label">Name:</span></label>
		<input type="text"  size="25" value="<?php echo $result['Name'];?>"></br></br></br>
		<label><span class="label">Username:</span></label>
		<input type="text"  size="23" value="<?php echo $result['Username'];?>"></br></br></br>
		<label><span class="label">Course Type</span></label>
		<input type="text"  size="22" value="<?php echo $result['CourseType'];?>"></br></br></br>
		<label><span class="label">Address</span></label>
		<input type="text"  size="25" value="<?php echo $result['Address'];?>"></br></br></br>
		<form action="#" method="post">
			<input type="Submit" name="logout" value="Logout">
		</form>
	</div>
</body>
</html>


<?php
}
?>
<?php
if($_SESSION['check']=='Teacher')
{
	include("connect.php");
	$user_name=$_SESSION['username'];
	$query="SELECT * FROM teacher WHERE Username ='$user_name'";
	$data=mysqli_query($connect,$query);
	$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display page</title>
		<style>
		.profile_pic
		{
			border-radius: 50%; /*To make the image look round in shape*/
			height: 200px;
			width: 200px;
			text-align: center;

		}
		.profile_container
		{
			width: 800px;
			height: 560px;
			background: rgba(0,0,0,0.4);/* Setting transparent background to the container only*/
			padding: 10px;
			color: white;
			margin: auto;
			margin-top: 50px; 
			text-align: center;
		}
		.label
		{
			float: auto;
			width: 180px;

		}
    </style>
</head>
<body bgcolor="grey">
	<div class="profile_container">
		<img src="<?php echo "Teacher/".$result['PicSource'];?>" height="200" width="200" class="profile_pic" ></br></br></br></br>
		<label><span class="label">Name:</span></label>
		<input type="text"  size="25" value="<?php echo $result['Name'];?>"></br></br></br>
		<label><span class="label">Username:</span></label>
		<input type="text"  size="23" value="<?php echo $result['Username'];?>"></br></br></br>
		<label><span class="label">Department</span></label>
		<input type="text"  size="22" value="<?php echo $result['Department'];?>"></br></br></br>
		<label><span class="label">Salary</span></label>
		<input type="text"  size="25" value="<?php echo $result['Salary'];?>"></br></br></br>
		<label><span class="labels">Address</span></label>
		<input type="text"  size="25" value="<?php echo $result['Address'];?>"></br></br></br>
		<form action="#" method="post">
			<input type="Submit" name="logout" value="Logout">
		</form>
	</div>
</body>
</html>

<?php
}

?>
<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header("location:Login.php");
	exit();

}




?>
