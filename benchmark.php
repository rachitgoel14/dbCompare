<?php
$count = 100000;
$concurrency = 40;

for($i=0; $i<$concurrency; $i++)
{
  // exec("php -q mysqlselect.php $i $count > /dev/null &");
//   exec("php -q pgsqlselect.php $i $count > /dev/null &");
   exec("php -q mysqlinsert.php $i $count > /dev/null &");
//   exec("php -q pgsqlinsert.php $i $count > /dev/null &");
}

?>