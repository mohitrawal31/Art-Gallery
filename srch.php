<?php 
	  if(isset($_POST['submit'])){ 
	 if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
	  
	  $db=mysql_connect  ("localhost", "root",  "root") or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  $mydb=mysql_select_db("srch"); 
	  
	  $sql="SELECT  ID, FirstName, LastName FROM contact WHERE FirstName LIKE '%" . $name .  "%' OR LastName LIKE '%" . $name ."%'"; 
	  
	  $result=mysql_query($sql); 
	   
	  while($row=mysql_fetch_array($result)){ 
	          $FirstName  =$row['FirstName']; 
	          $LastName=$row['LastName']; 
	          $ID=$row['ID']; 
	 echo "<ul>\n"; 
	 echo "<li>" . "<a  href=\"srch.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
	  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	 } 
	  } 
	?> 