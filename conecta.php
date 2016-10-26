<?php

$serverName = "DESKTOP-3ITI8SF\SQLEXPRESS"; //Máquina local YWIN
//$serverName = "ASUS\SQLEXPRESS"; //Servidor Rio Med

$connectionInfo = array("Database"=>"medx");

$conn = sqlsrv_connect($serverName, $connectionInfo);