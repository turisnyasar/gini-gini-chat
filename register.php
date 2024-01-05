<?php
include "config.php";

$u = filter_var($_POST['username'],
     FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$p = md5($_POST['password']);
$sql = " INSERT INTO userdb 
				 (username, password, level)
				 VALUES
				 ('$u', '$p', 2) ";
if ( query1($sql) ) {
	simpan_pesan("Registrasi berhasil");
	kembali("index.php");
}


