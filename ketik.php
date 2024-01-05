<?php 
include "config.php";

$teks = urlencode($_POST['teks']);
$kaitan = (int) $_POST['kaitan'];
$userID = getID();
$tgl = date("Y-m-d H:i:s");

$sql = " INSERT INTO chatdb
				 (tgl, userID, chatID, teks)
				 VALUES
				 ('$tgl', $userID, $kaitan, '$teks') ";

if (query1 ($sql)) {
	kembali("index.php");
}