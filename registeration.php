<script language=javascript>
function valid()
{
 if(f.t1.value=="")
	{
	alert("enter Name");
	return;
	}
 if(f.t1.value.length<3)
	{
	alert("enter minimum 3 characters");
	return;
	}
 if(f.t2.value=="")
	{
	alert("enter password");
	return;
	}
if(f.t3.value=="")
	{
	alert("confirm password");
	return;
	}
 if(f.t4.value=="")
	{
	alert("enter contact no");
	return;
	}
if(f.t5.value=="")
	{
	alert("enter email id");
	return;
	}
 if((f.t2.value)!=(f.t3.value))
	{
	alert("Password Doesnot Match");
	return;
	}
 
 f.submit();
  }
</script>


<html>
<title>Register</title>
<?php
include('header.php');
?>
<br> 
<h2 align="center" style="color:#990000; font-style:italic">Register Here.. Its Free!!!</h2>
<form name=f action="register.php">
<div align="center">
<table>
<tr><td><h4 style="color:#660000">Enter User Name &nbsp;&nbsp;&nbsp;<input type="text" name="t1"> <sup>(3-6 characters)</sup><h4></td></tr>
<tr><td><h4 style="color:#660000">Enter Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="t2" ><sup>(min 6 characters)</sup></h4></td></tr>
<tr><td><h4 style="color:#660000">Confirm Password &nbsp;&nbsp;<input type="password" name="t3"><sup>(Re Type Password)</sup></h4></td></tr><br></h4></td></tr>
<tr><td><h4 style="color:#660000">Enter Contact No.&nbsp;&nbsp;&nbsp;<input type="text" name="t4" ></h4></td></tr>
<tr><td><h4 style="color:#660000">Enter Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t5"><sup>(id@domain name)</sup></h4></td></tr>
<tr><td><h4 style="color:#660000">Enter Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t6"></h4></td></tr>
<tr><td><h4 style="color:#660000">Enter Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t7"></h4></td></tr>




<tr><td><h4 style="color:#660000" align="center"><input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset"></h4></td></tr>
</table>
</div>

<?php
include('footer.php');
?>
</form>
</html>