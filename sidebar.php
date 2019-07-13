<Div id=lsidebar style="width:220px; height:350px" >
<div id="features">
<a href="artistrequest.php"><font color="#0066CC" face="Arial, Helvetica, sans-serif">&gt;&gt;Request form for artists<sup>*</sup></font></a></li><br><br>
<a href="events.html"><font color="#0066CC" face="Arial, Helvetica, sans-serif">&gt;&gt;New Events</font></a>
</div>



<font color="#990000">
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
<body onLoad="startTime()">
<div align="right">
<div id="txt"></div>
</div>



<h3>Login Here....</h3>
<form action="login.php" method="post">
Username<input type="text" name="t1"><br><br>
Password<input type="password" name="t2"><br><br>
<input type="submit" value="submit">&nbsp;&nbsp;&nbsp; <a href="registeration.php"><font color="#990000">Sign Up</a><br><br>
<a href="register.html"><font color="#990000">Forget Password?? </font> </a>

</form>

</div>
				
				
				
	
				
				
				</div>