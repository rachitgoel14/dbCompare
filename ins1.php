<?php

$scriptno = 3;
$count = 100;

$con=mysqli_connect("localhost","root","rachit","openemr");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$start = microtime(true);
for($x=0; $x<$count; $x++)
{

$xx = $x*$scriptno;
mysqli_query($con,"INSERT INTO addresses VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO billing VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO categories VALUES ('$xx','$x','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO claims VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx',$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO clinical_plans VALUES ('$xx','$x','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO clinical_plans_rules VALUES ('$xx','$x')");

mysqli_query($con,"INSERT INTO clinical_rules VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO codes VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO syndromic_surveillance VALUES ('$xx','$x','$xx','$xx')");

mysqli_query($con,"INSERT INTO config VALUES ('$xx','$x','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO config_seq VALUES ('$xx')");

mysqli_query($con,"INSERT INTO dated_reminders VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO dated_reminders_link VALUES ('$xx','$x','$xx')");

mysqli_query($con,"INSERT INTO documents VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO documents_legal_categories VALUES ('$xx','$x','$xx','$xx')");

mysqli_query($con,"INSERT INTO drug_sales VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO drug_inventory VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx','$xx')");

mysqli_query($con,"INSERT INTO drug_templates VALUES ('$xx','$x','$xx','$xx','$xx','$xx','$xx')");


}
$end = microtime(true);

$t=$end-$start;
echo $t;

$log = "Mysql innodb Time to insert $count in run $scriptno = ".$t;

$file =fopen("benchmark.txt","a");
fputs($file,"<br>");
fputs($file,$log);

fclose($file);
mysqli_close($con);
?>