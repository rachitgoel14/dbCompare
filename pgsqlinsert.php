<?php
include "dbfuncs.php";

$scriptno = $argv[1]+1;
$count = $argv[2];

$mysql = new pgsqldb();
$start = microtime(true);
for($x=0; $x<$count; $x++)
{
  $xx = $x*$scriptno;
  $qry = "insert into data (val, txt) values ('$xx','$x in $scriptno')";
  $mysql->insertqry($qry);
}
$end = microtime(true);
$log = "\nAvg Pgsql Time to insert $count in run $scriptno = ".($end-$start);
logtime($log);
?>