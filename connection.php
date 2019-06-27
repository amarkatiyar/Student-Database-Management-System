<?php
$error='Connection cannot established';
$error_db='Database no connected';
$con = mysqli_connect("localhost","root","") or die($error);
mysqli_select_db($con,'amar') or die($error_db);
?>