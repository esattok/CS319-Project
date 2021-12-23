<?php
$host = "localhost";
$user = "postgres";
$pass = "pgpass123";
$db = "mydata";
$con = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass") or die ("Couldn't connect to server");
$msg = "";
$timeoutVal = 1600;
