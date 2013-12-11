<?php
$host = "localhost";
$username= "root";
$password ="";
$database = "consulta";
$connection = mysql_connect($host, $username, $password) or die (mysql_error());
mysql_select_db($database) or die(mysql_error());


    mysql_query("SET character_set_results=utf8", $database);
    mb_language('uni'); 
    mb_internal_encoding('UTF-8');
    mysql_select_db($argDB, $database);
    mysql_query("set names 'utf8'",$database)

?>