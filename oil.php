<html>
<link rel="stylesheet" type=text/css href="sobha.css">
<h1> Digital Art Gallery </h1>

<h2><marquee >The ARTWORK of Leonid</marquee> </h2> 

<body background="26.jpg">
<div>
<div id=menu>
<div align=center>
<ul>
<li><a href="abc.html">Login</a></li>
<li><a href="aboutus.html">About Us</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="contactus.html">Contact Us</a></li>
<li><a href="abc.html">LogOut</a></li>
</ul>
</div>
</div>
<h4><a href="leonid.html">Back to artist page</a></h4>
<div id="sidebar"; style="width:180" >
<form name=f1 action="upload.php" enctype="multipart/form-data" method="post">
<h4><font style="text-decoration:blink; color: #990000">Upload Paintings of leonid</font></h4>
<br>
Select catogry<select name="cat" size=1>
<option>oil </option>
<option>sketches</option>
<option>portraits</option>
<option>other</option>
</select>
<p>
<input type="file"  name="myfile"><br><br>
<input type="submit" value="Upload image">
</form>
</p>
</div>
</div>
 <div style=" width:1000; height:450; float:none; margin-left:220;">
<form action="oil.php" method="POST" >

<div align="center">
Search  Category<select name="cat" size=1 >
        <option>oil </option>
        <option>sketches</option>
         <option>portraits</option>
        <option> other</option>
        </select>
 <input type=submit value=open>
</form>
</div>
<h5 align="center"><font color="#FFFF00">click on the painting to Download</font></h5>
<?php

if(isset($_POST["cat"]))
{
$cat = $_POST["cat"];

$dbc=@mysql_connect("localhost","root","jobanr") OR die('could not connect to mysql:'.mysql_error());
mysql_select_db("upload") OR die('Could not select the database:'.mysql_error());

$myquery="select * from gallery where category='$cat'";

$result=mysql_query($myquery,$dbc);

print mysql_error();

while($row = mysql_fetch_row($result))
{

if($row[0]==="oil")

print " <a href=$row[1]$row[2]><img src=$row[1]$row[2] width=160 height=200></a>&nbsp;&nbsp; &nbsp;&nbsp;";

else if($row[0]==="portraits")
print "  <a href=$row[1]$row[2]><img src=$row[1]$row[2] width=250 height=200></a>&nbsp;&nbsp; &nbsp;&nbsp;";

else if($row[0]==="sketches")
print "<a href=$row[1]$row[2]><img src=$row[1]$row[2] width=200 height=200></a> &nbsp;&nbsp; &nbsp;&nbsp;";

else
print " <a href=$row[1]$row[2]><img src=$row[1]$row[2] width=200 height=200></a>&nbsp;&nbsp; &nbsp;&nbsp;";
}
}


?>
</div>
<div align="center"; style="clear:both">
<br>
<h6 align="center" style="border-bottom:double" ><font color="#990066" face="Verdana, Arial, Helvetica, sans-serif"  style="word-spacing:inherit" pointsize="10">Designed BY - JOBANJIT SINGH h&copy;2011 &lt;All reghts Reserved .&gt;  RWS&trade;</font></h6>
</div>


 