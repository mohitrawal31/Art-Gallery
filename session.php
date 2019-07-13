
<br>
<?php session_start();
        $un = $_SESSION["uname"];
       
      include('dbc.php'); 
	  $result = mysql_query("select * from login where username='$un'"); 
	  $row = mysql_fetch_row($result);
    ?>
			
			
			 <table border="1" cellspacing="10px">
            <th colspan="2" rowspan="3"><img src="images/<?php echo $img?>" width=80 height=100><br>
                 <?php echo $row[1] ?> &nbsp; <?php echo $row[2] ?></th>
				<th width="517"  bgcolor="#999999"><h2 class="title"><a href="#">Welcome <?php echo $un ?>   </a></h2></th></tr>
				<tr><th width="517"><a href=profile.php?user=<?php echo $row[11]?> >View Profile  </a> &nbsp;&nbsp;&nbsp; <a href=modifyuser1.php?user=<?php echo $row[11]?>>Edit Profile  </a>
                
                  &nbsp;&nbsp;&nbsp; <a href=modifyuser1.php?user=<?php echo $row[11]?>>Change Password  </a>
                  &nbsp;&nbsp;&nbsp; <a href=modifyuser1.php?user=<?php echo $row[11]?>>Change Staus </a>
                  </th></tr>
                  <tr><th>dksjhqkd</th></tr>
                </table>
                <br><br>