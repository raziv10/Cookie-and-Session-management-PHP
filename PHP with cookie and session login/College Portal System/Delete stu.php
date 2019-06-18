<?php
include("connect.php");
$sn=$_GET['sn'];
$query="DELETE FROM student WHERE SN='$sn'";
$data= mysqli_query($connect,$query);
if(isset($data))
	{
		echo "<font color='green' font size='30'>Record Deleted Sucessfully.";
		header("refresh:2;url=Admin.php");
		exit();

	}
	else
	{
			echo "<font color='red' font size='30'>Record Not Deleted.";
	}

?>