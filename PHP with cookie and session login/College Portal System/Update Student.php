<?php
include("connect.php");
$query="SELECT * FROM student";
$data=mysqli_query($connect,$query);
$total=mysqli_num_rows($data);
if($total !=0)
{
?>
<body bgcolor="ghostwhite">
<style>
	a{
		text-decoration: none;
		color:red;
	}
</style>	
<table cellpadding="18px" cellpadding="18px">
	<tr>
		<td><b>S.N</b></td>
		<td><b>Name</b></td>
		<td><b>Username</b></td>
		<td><b>Password</b></td>
		<td><b>Course Type</b></td>
		<td><b>Address</b></td>
		<td><b>Pic Source</b></td>
		<td colspan="2"><b>Operations</b></td>
	</tr>
<?php
while($result = mysqli_fetch_assoc($data))
{
	echo "
			<tr>
				<td>".$result['SN']."</td>
				<td>".$result['Name']."</td>
				<td>".$result['Username']."</td>
				<td>".$result['Password']."</td>
				<td>".$result['CourseType']."</td>
				<td>".$result['Address']."</td>
				<td>".$result['PicSource']."</td>
				<td><a href='Update stu.php?sn=$result[SN]&nam=$result[Name]&usr=$result[Username]&pwd=&result[Password]&cty=$result[CourseType]&add=$result[Address]&pcs=$result[PicSource]'>EDIT</td></a>
				<td><a href='Delete stu.php?sn=$result[SN]&nam=$result[Name]&usr=$result[Username]&pwd=&result[Password]&cty=$result[CourseType]&add=$result[Address]&pcs=$result[PicSource]'>DELETE</td></a>
			</tr>";
}

}
else
{
	echo "<font color='red' font size='15'>Table has no Reecord.";
}
?>
</table>
</body>