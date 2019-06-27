<?php
$host="localhost";
$nam="root";
$pass="";
$con=mysql_connect($host,$nam,$pass);
$db=mysql_select_db("amar");
if(!$con)
{
	echo "not connected";
}
if(!$db)
{
	echo " data base not connected";
}
<html>
<head></head>