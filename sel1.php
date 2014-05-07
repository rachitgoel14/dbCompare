<?php

$scriptno = 3;
$count = 1000;

$con=mysqli_connect("localhost","root","rachit","benchmark");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$start = microtime(true);
for($x=0; $x<$count; $x++)
{

$xx = $x*$scriptno;
mysqli_query($con,"SELECT * FROM data where val ='$xx' ");

}
$end = microtime(true);

$t=$end-$start;
echo $t;

$log = "Mysql innodb Time to select $count in run $scriptno = ".$t;

$file =fopen("benchmark.txt","a");
fputs($file,"<br>");
fputs($file,$log);

fclose($file);
mysqli_close($con);
?>