<?php

$a=$_GET["t1"];
$b=$_GET["t2"];

$abc=@mysql_connect('localhost','root','jobanr')OR die('could not connect to mysql'.mysql_error());
mysql_select_db('login')OR die('could not connect'. mysql_error());

$submit=mysql_query("insert into student values('$a',NULL,NULL,'$b')");

if(!$submit)
{
 print("not submitted");
}
else
{
 include"AddingNewUser.html";
}
?>