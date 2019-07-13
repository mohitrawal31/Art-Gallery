<html>
<?php
include('header.php');
include('sidebar.php');
include('dbc.php');
?>



<?php
$result=mysql_query("select * from artistprofile");
print mysql_error();
while($row=mysql_fetch_row($result))
{
?>
<table border=1 bgcolor="#CCCCCC" align="center" cellspacing="10px" >
<tr>
<td><img src=<?php echo "../".$row[2]."/".$row[6]; ?>   width=120 height="120"> <br>
<td>Artist: <?php echo $row[0]?> <br>
Emailid:<?php echo $row[1]?><br>
Contact No.:<?php echo $row[2]?> <br>
Address:<?php echo $row[3]?><br> 
Country:<?php echo $row[4]?><br>
State:<?php echo $row[5]?> <br> 
</tr>
</table> 
<?php
}
?>

<?php
include('footer.php');
?>