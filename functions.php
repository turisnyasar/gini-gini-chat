<?php

function query1($sql) {
	global $koneksi;
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil) {
		header("location: error.php");
		exit;
	} 
	else {
		return true;
	}
}

function query2($sql) {
	global $koneksi;
	$list = array();
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil) {
		kembali("error.php");
	} 
	else {
		while($row = mysqli_fetch_assoc($hasil)) {
			$list[] = $row;
		}
		return $list;
	}
}



function simpan_pesan($pesan) {
	$_SESSION['pesan'] = 
		"<div class='pesan'>$pesan</div>";
}

function tampil_pesan() {
	if (isset($_SESSION['pesan'])) {
		echo $_SESSION['pesan'];
		unset ($_SESSION['pesan']);
	}
}

function kembali ($url) {
	header("location: $url");
	exit;
}

function is_login() {
	if (isset ($_SESSION['user'])) 
		return true;
	else
		return false;
}

function getID() {
	return $_SESSION['user']['ID'];
}

function is_admin() {
	if (is_login()) {
		if ($_SESSION['user']['level'] == 1) return true;
		else return false;
	} else {
		return false;
	}
}