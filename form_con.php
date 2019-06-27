
<?php
include_once'connection.php';

if(isset($_POST['submit']))
{
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$mobile = $_POST['mobile'];
	$course = $_POST['course'];
	$address = $_POST['address'];
	
	$sql = "insert into information (f_name, l_name, father_name, mother_name, mobile, course, address) values ('$f_name','$l_name','$father_name','$mother_name','$mobile','$course','$address')";
	$result = mysqli_query($con,$sql);
	if($result>0)
	{
		echo'Data submitted successfully';
	}
	else
	{
		echo'Error occured, cannot submit the data';
	}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	