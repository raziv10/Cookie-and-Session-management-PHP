<?php
include("connect.php");
$query="SELECT * FROM teacher";
$data=mysqli_query($connect,$query);
$total=mysqli_num_rows($data);
if($total !=0)
{
?>
<body bgcolor="seashell">
<table cellpadding="10px" cellpadding="10px">
	<tr>
		<td><b>S.N</b></td>
		<td><b>Name</b></td>
		<td><b>Username</b></td>
		<td><b>Password</b></td>
		<td><b>Department</b></td>
		<td><b>Salary</b></td>
		<td><b>Address</b></td>
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
			</tr>";
}

}
else
{
	echo "<font color='red' font size='30'>Table has no record.";
}
?>
</table>
</body>