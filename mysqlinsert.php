<?php
include "dbfuncs.php";

//$scriptno = $argv[1]+1;
//$count = $argv[2];

$scriptno = 3;
$count = 1000;

$mysql = new mysqldb();
$start = microtime(true);
for($x=0; $x<$count; $x++)
{
  $xx = $x*$scriptno;
  $qry = "insert into data (val, txt) values ('$xx','$x in $scriptno')";
  $mysql->insertqry($qry);
}
$end = microtime(true);
$log = "\nMysql innodb Time to insert $count in run $scriptno = ".($end-$start);
logtime($log);
?>