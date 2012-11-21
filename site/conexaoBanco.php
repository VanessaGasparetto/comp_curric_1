<?php
 mysql_connect("localhost", "root", "1234") or die (mysql_error());
 
 $sql = "Insert into contato (name, email, message, created) values ()";
 
 mysql_query($sql) or die (mysql_error());
 
 mysql_close();
 
?>