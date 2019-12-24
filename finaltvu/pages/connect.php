<?php

$server = "localhost";
$db = "mistvu";
$us = "root";
$ps = "";

$dsn = "mysql:host = $server; dbname = $db; charset = utf8";

$strConnect = new PDO($dsn, $us, $ps);

?>