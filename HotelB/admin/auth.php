<?php
$username = "epiz_21764990";
$password = "RRH00f1bcgF5";
$hostname = "sql307.epizy.com"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die(mysql_error());

//select a database to work 
$db = "epiz_21764990_unleashe_hotel";
$selected = mysql_select_db($db,$dbhandle) 
  or die(mysql_error());


?>