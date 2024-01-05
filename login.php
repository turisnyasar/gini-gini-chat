<?php
include "config.php";

$u = filter_var($_POST['username'],
     FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$p = md5($_POST['password']);
$sql = " SELECT * FROM userdb
				 WHERE username = '$u'
				 AND	 password = '$p' ";
$hasil = query2($sql);
if (count($hasil) == 0) {
	simpan_pesan("username/password salah");
	kembali("index.php");
}
else 
if (count($hasil) == 1) {
	$_SESSION['user'] = $hasil[0];
	kembali("index.php");
}


