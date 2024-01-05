<?php
session_start();

$host = "localhost";
$userdb = "root";
$userdb_pass = "";
$dbname = "ginichat";

$koneksi = mysqli_connect($host, $userdb, $userdb_pass,
					 $dbname);

include "functions.php";	 