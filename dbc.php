<?php
$dbc=@mysql_connect('localhost','root','')or die('could not connect to mysql:'.mysql_error());
mysql_select_db('artgalery')or die('could not select the database:'.mysql_error());
?>