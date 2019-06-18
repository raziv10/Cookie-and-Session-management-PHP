<?php
session_start();
include("connect.php");
?>
<html>
<head>
	<title>Login Page</title>
	<style>
		.label
		{
			float: left;
			width: 110px;
		}
		.profile_container
		{
			width: 500px;
			height: 280px;
			background: rgba(0,0,0,0.4);/* Setting transparent background to the container only*/
			padding: 40px;
			color: white;
			margin: auto;
			margin-top: 120px; 
			text-align: center;
		}
		.text
		{
			text-align: left;
			color: cyan;
			letter-spacing: 2px;
			margin-top: 40px;
		}
		.warning
		{
			background: red;
			border-radius: 2px;
			padding: 10px;
			color: white;
		}
	</style>
</head>
<body bgcolor="orange">
	<h1>Login</h1><hr>
	<form action="#" method="post">
		<div class="profile_container">
			<div>
				<label><span class="label">Account Type</label></span></label>
				<select name="account" style="width: 180px;">
					<option value="Admin">Admin</option>
					<option value="Student">Student</option>
					<option value="Teacher">Teacher</option>
				</select></br></br>
			</div>
			<div>
				<label><span class="label">Username:</span></label>
				<input type="text" name="username"></br></br>
			</div>
			<div >
				<label><span class="label">Password:</span></label>
				<input type="password" name="password"></br></br>
			</div>
			<div>
				<input type="Submit" name="login" value="Login">
			</div>
			<div class="text">
				<p>If this is your first visit then please fill up the form.</p>
				<a href="Student.php" style="color: cyan;"><p>Student Form</p></a>
				<a href="Teacher.php" style="color: cyan;""><p>Teacher Form</p></a>
			</div>
	</form>
</body>
</html>
<?php
if(isset($_POST['login']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if(isset($_POST['account']))
	{
		$check=$_POST['account'];
	}
	if($check=="Admin")
	{
		$query ="SELECT * FROM admin WHERE Username ='$user' && Password = '$pass'";
		$data=mysqli_query($connect,$query);
		$total=mysqli_num_rows($data);
		if($total==1)
		{
			$_SESSION['check']=$check;
			$_SESSION['username']=$user;
			header("location:Admin.php");
			exit();	
		}
	}
if($check=="Student")
	{
		$query ="SELECT * FROM student WHERE Username ='$user' && Password = '$pass'";
		$data=mysqli_query($connect,$query);
		$total=mysqli_num_rows($data);
		if($total==1)
		{
			$_SESSION['check']=$check;
			$_SESSION['username']=$user;
			header("location:Display information.php");
			exit();	
		}
}
if($check=="Teacher")
	{
		$query ="SELECT * FROM teacher WHERE Username ='$user' && Password = '$pass'";
		$data=mysqli_query($connect,$query);
		$total=mysqli_num_rows($data);
		if($total==1)
		{
			$_SESSION['check']=$check;
			$_SESSION['username']=$user;
			header("location:Display information.php");
			exit();	
		}
}
	else
	{
		echo '<div class="warning">Login failed!!!</div>';
	}
	?>
	</div>
	<?php
	 }
	


?>