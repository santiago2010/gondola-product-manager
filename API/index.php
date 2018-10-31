<?php

$path = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"];
$path = str_replace("/", "\\", $path);

// db conn
require  $path . "Database/db_params.php";
require  $path . "Database/db_connection.php";

$db_conn = new db_connection($servername, $username, $password, $dbname);

$result = $db_conn->getData();

 var_dump($result);
