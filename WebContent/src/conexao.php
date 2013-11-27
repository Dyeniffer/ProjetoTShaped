<?php
$host = "localhost";
$username= "root";
$password ="";
$database = "consulta";
$connection = mysql_connect($host, $username, $password) or die (mysql_error());
mysql_select_db($database) or die(mysql_error());

?>