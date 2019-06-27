<?php
include_once'connection.php';

if(isset($_POST['submit']))
{
	$f_name = $_POST['f_name'];
	$course = $_POST['course'];
	
	$sql = "select * from information where f_name = '$f_name' AND course = '$course' ";
	$result = mysqli_query($con,$sql);
	//if($result>0)
	//{
		echo"<table border=4 width=100%>";
		echo"<tr><th>First name</th><th>Last name</th><th>Father name</th><th>Mother name</th><th>mobile</th><th>course</th><th>Temporary address</th></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			
			echo'<tr>';
			extract($row);
			echo'<td> '.$f_name.' </td>';
			echo'<td> '.$l_name.' </td>';
			echo'<td> '.$father_name.' </td>';
			echo'<td> '.$mother_name.' </td>';
			echo'<td> '.$mobile.' </td>';
			echo'<td> '.$course.' </td>';
			echo'<td> '.$address.' </td>';
			echo'</tr>';
			echo"</table>";
		}
	//}
	//else
	//{
	//	echo'no result found';
	//}
}
?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			