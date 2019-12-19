<?php

$hostName = "localhost";
$username = "root";
$password = "";
$db = "clinic";

$connect = mysqli_connect($hostName, $username, $password, $db);
$selectDb = mysqli_select_db($connect, $db);

?>