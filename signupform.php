<?php

$a=$_GET["t1"];
$b=$_GET["t2"];
$c=$_GET["t4"];
$d=$_GET["t5"];
include('dbc.php');

$submit=mysql_query("insert into student values('$a','$b','$c','$d')");

if(!$submit)
 {
 print("not submitted");
 }
else
 {
 include"abc.html";
 }
?>