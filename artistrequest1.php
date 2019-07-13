<?php
$user=$_GET["t1"];
$email=$_GET["t2"];
$contact=$_GET["t3"];
$address=$_GET["t4"];
$country=$_GET["t5"];
$state=$_GET["t6"];
$image=$_GET["myfile"];
include('dbc.php');

$submit=mysql_query("insert into artistprofile values('$user','$email','$contact','$address','$country','$state','$image')");
if($submit)
{
  print("submitted");
}
else
{
  print(" not submitted");
}
?>



