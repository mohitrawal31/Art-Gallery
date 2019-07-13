<?php
$user=$_GET["t1"];
$pass=$_GET["t2"];

$contact=$_GET["t4"];
$email=$_GET["t5"];
$type=$_GET["t6"];
$address=$_GET["t7"];

include('dbc.php');

$submit=mysql_query("insert into login values('$user','$pass','$contact','$email','$type','address')");



if($submit)
{
  print("submitted");
}
else
{
  print(" not submitted");
}
?>



