<?php
include "../config.php";

$array = array();

$sql = " SELECT * FROM userdb ";

$hasil = query2($sql);

echo json_encode ( $hasil);


