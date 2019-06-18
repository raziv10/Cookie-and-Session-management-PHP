<?php
$connect = mysqli_connect('localhost','root','');
if(!$connect)
{
	echo "Not connected to the server";
}
if(!mysqli_select_db($connect,'College_Portal_System'))
{
	echo "Database not found";
}
?>