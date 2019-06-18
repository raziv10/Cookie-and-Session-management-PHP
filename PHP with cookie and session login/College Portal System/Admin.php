<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style>
	.container
		{
			width: 100%;
			height: 30px;
			background:brown;
			padding: 15px;
			color: white;
			margin-top: 30px; 
			text-align: center;
		}
		.text
		{
			font-size: 20px;
			letter-spacing: 8px;
			color: white;
		}
		a
		{
   		 text-decoration: none;
		}


		


	</style>
</head>
<body bgcolor="teal">
	<div style="float: right;">
		<table border="5">
			<tr><td><h1 class="text" >WELCOME ADMIN </h1></td></tr>
		</table></br>
		<form action="#" method="post">
			<input type="submit" name="logout" value="Logout" style="width: 120px;">
		</form>
	</div>
	<p></br></br></br></br></br></br></p>
	<div class="container">
		<a href="View Student.php"><p class="text">VIEW STUDENTS</p></a></br></br></br>
	</div>
	<div class="container" style="background-color: crimson;">
		<a href="View Teacher.php"><p class="text">VIEW TEACHERS</p></a></br></br></br></br>
	</div>
	<div class="container" style="background-color: darkgrey;">
		<a href="Student.php"><p class="text">ADD STUDENT</p></a></br></br></br>
	</div>
	<div class="container" style="background-color: dimgrey;">
		<a href="Teacher.php"><p class="text">ADD TEACHERS</p></a></br>
	<div class="container" style="background-color:lightseagreen;">
		<a href="Update Student.php"><p class="text">UPDATE STUDENT</p></a></br></br></br></br>
	</div>
	<div class="container" style="background-color:royalblue;">
		<a href="Update Teacher.php"><p class="text">UPDATE TEACHERS</p></a></br></br></br>
	</div>
</body>
</html>
<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header("location:Login.php");
	exit();

}


?>