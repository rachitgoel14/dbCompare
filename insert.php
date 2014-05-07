<?php

$scriptno = 3;
$count = 1000;

$con=mysql_connect("localhost","root","rachit","benchmark");
// Check connection
if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//$start = microtime(true);
for($x=0; $x<$count; $x++)
{
  $xx = $x*$scriptno;
  $qry = "insert into data (val, txt) values ('$xx','$x in $scriptno')";
  $mysql_query($con,$qry);
}
?>