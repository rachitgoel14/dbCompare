<?php
abstract class dbfuncs
{
  abstract function insertqry($qry);
  abstract function selectqry($qry);
  abstract function connectdb();

  public function log($str)
  {
    $file = "error.log";
    $fp = fopen($file, "a");
    fwrite($fp, "$str\n");
    fclose($fp);
  }
}

class mysqldb extends dbfuncs
{
  private $user = "root";
  private $pass = "";
  private $host = "localhost";
  private $port = 3306;
  //private $socket = "/tmp/mysql.sock";
  private $database = "benchmark";

  public $db;

  function __construct()
  {
    $this->connectdb();
  }

  public function connectdb()
  {
    //$this->db = mysql_connect($this->host.':'.$this->port, $this->user, $this->pass) or die(mysql_error())
    $this->db = mysql_connect($this->host,$this->port, $this->user, $this->pass)
           if (!$db)
        {
           die('Could not connect: ' . mysql_error());
        }

      mysql_select_db($this->database, $this->db);
  }

  public function insertqry($qry)
  {
    if(!mysql_ping($this->db))
      $this->connectdb();

    mysql_query($qry, $this->db) or $this->log(mysql_error());
  }

  public function selectqry($qry)
  {
    if(!mysql_ping($this->db))
      $this->connectdb();

    $rs = mysql_query($qry, $this->db) or $this->log(mysql_error());
    return $rs;
  }
}

class pgsqldb extends dbfuncs
{
  private $dns = "host=localhost port=5432 user=postgres password=rachit dbname=postgres";

  public $db;

  function __construct()
  {
    $this->connectdb();
  }

  public function connectdb()
  {
    $this->db = pg_connect($this->dns) or die(pg_last_error());
  }

  public function insertqry($qry)
  {
    if(!pg_ping($this->db))
      connectdb();

    pg_query($this->db, $qry) or $this->log(pg_last_error($this->db));
  }

  public function selectqry($qry)
  {
    if(!pg_ping($this->db))
      $this->connectdb();

    $rs = pg_query($this->db, $qry) or $this->log(pg_last_error($this->db));
    return $rs;
  }
}

function logtime($str)
{
    $file = "benchmark.log";
    $fp = fopen($file, "a");
    fputs($fp, $str);
    fclose($fp);
}
?>