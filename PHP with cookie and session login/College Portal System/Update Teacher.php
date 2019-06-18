<?php
include("connect.php");
$query="SELECT * FROM teacher";
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
<table cellpadding="10px" cellpadding="10px">
	<tr>
		<td><b>S.N</b></td>
		<td><b>Name</b></td>
		<td><b>Username</b></td>
		<td><b>Password</b></td>
		<td><b>Department</b></td>
		<td><b>Salary</b></td>
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
				<td>".$result['Department']."</td>
				<td>".$result['Salary']."</td>
				<td>".$result['Address']."</td>
				<td>".$result['PicSource']."</td>
				<td><a href='Update tu.php?sn=$result[SN]&nam=$result[Name]&usr=$result[Username]&pwd=&result[Password]&dpt=$result[Department]&sal=$result[Salary]   &add=$result[Address]&pcs=$result[PicSource]'>EDIT</td></a>
				<td><a href='Delete tu.php?sn=$result[SN]&nam=$result[Name]&usr=$result[Username]&pwd=&result[Password]&dpt=$result[Department]&sal=$result[Salary]   &add=$result[Address]&pcs=$result[PicSource]'>DELETE</td></a>
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