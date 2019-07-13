<?php
include('header.php');
?>
<br><br>
<h3 align="center" style="color:#990000">Request Form For Artists..Fill Your Details Here...<h3>
<form name=f action="artistrequest1.php">
<br><div align="center">
<table align="center" >
                
                <tbody>
                    <tr><td>User Name*</td><td><input type="text" name="t1" value="" /></td></tr>
                    <tr><td>Email Id*</td><td> <input type="text" name="t2" value="" /></td></tr>
					<tr><td>Contact No.*</td><td> <input type="text" name="t3" value="" /></td></tr>
					<tr><td>Address*</td><td> <input type="text" name="t4" value="" /></td></tr>
                    <tr><td>Country</td><td> <select name="t5" style="width:200px;">
                <option>India</option>
                <option>USA</option>
                <option>UK</option>
				<option>Dubai</option>				
                <option>Canada</option>
                <option>Itly</option>
                </select> </td></tr>
				<tr><td>State</td><td> <input type="text" name="t6" value="" /> </td></tr>
				<tr><td>Upload Photo </td><td><input type="file" name="myfile" /> </td></tr>                   
                    
                    
              </tbody>
            </table>







</h4></td></tr>
</table>
<h2 align="center"><input type="submit" value="Submit">

<input type="reset" value="Reset"></h2>
</div>
</form>



<?php
include('footer.php');
?>
