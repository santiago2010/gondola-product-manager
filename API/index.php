<?php
/*
$path = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"];
$path = str_replace("/", "\\", $path);
*/
// db conn
require "Database/db_params.php";
require "Database/DbConnectionParams.php";
require "Database/MysqliDbConnector.php";

$db_conn = new MysqliDbConnector( new DbConnectionParams($servername, $username, $password, $dbname) );

