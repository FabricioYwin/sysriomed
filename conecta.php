<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//$serverName = "DESKTOP-3ITI8SF\SQLEXPRESS"; //Máquina local YWIN
$serverName = $hostname."\SQLEXPRESS"; //Servidor Rio Med

$connectionInfo = array("Database"=>"medx");

$conn = sqlsrv_connect($serverName, $connectionInfo);