<?php
include "dbfuncs.php";

$scriptno = $argv[1]+1;
$count = $argv[2];

$mysql = new mysqldb();
$start = microtime(true);
for($x=0; $x<$count; $x++)
{
  $xx = $x*$scriptno;
  $qry = "select * from `data` where val ='$xx'";
  $mysql->selectqry($qry);
}
$end = microtime(true);
$log = "\nMysql innodb Time to select $count in run $scriptno = ".($end-$start);
logtime($log);
?>