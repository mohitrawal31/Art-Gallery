<?php
session_start();
include('dbc.php');
 $user=$_POST["t1"];
 $pass=$_POST["t2"];

print mysql_error();
$myquery="select*from login where username='$user'and password='$pass'";
$result=mysql_query($myquery);

print mysql_error();
$n=@mysql_num_rows($result);
if($n>=1)
{
  $_SESSION["uname"]=$user;
  if($user=="admin")
   include("admin/main23.php");
  else
   include("member/memberhome1.php");
}
else
{
include("invalid.php");
}
?>