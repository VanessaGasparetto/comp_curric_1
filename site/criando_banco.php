<?php
	
	mysql_connect("localhost", "root", "1234") or die(mysql_error());

	mysql_query("CREATE DATABASE mydbsite") or die(mysql_error());

	mysql_close();

?>