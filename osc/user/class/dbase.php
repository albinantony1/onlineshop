<?php
class dbase
{
var $con, $res, $dbase;
function connect()
{
$this-> con=mysql_connect("localhost","root","");
mysql_select_db("osc", $this->con);
}
function execute($qry)
{
	$this->connect();
	$this->res=mysql_query($qry,$this->con);
	return $this->res;
}
}
?>