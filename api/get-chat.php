<?php
include "../config.php";

$array = array();

$sql = " SELECT chatdb.ID as IDchat,
								userdb.username as nama,
								chatdb.tgl as tgl,
								chatdb.teks as teks
				 FROM chatdb LEFT JOIN userdb
							ON chatdb.userID = userdb.ID 
				 WHERE chatdb.chatID = 0
				 ORDER BY chatdb.ID DESC
				 LIMIT 0,10 ";

$hasil = query2($sql);

for($i=0; $i<count($hasil); $i++) {
	$hasil[$i][] = replies($hasil[$i]['IDchat']);
}

echo json_encode ( $hasil);


function replies($IDchat){
	
	$sql2 = " SELECT chatdb.ID as IDchat,
								userdb.username as nama,
								chatdb.tgl as tgl,
								chatdb.teks as teks
				 FROM chatdb LEFT JOIN userdb
							ON chatdb.userID = userdb.ID 
				 WHERE chatdb.chatID = $IDchat
				 ORDER BY chatdb.ID 
				 LIMIT 0,10 ";

	$hasil2 = query2($sql2);

	return $hasil2;
}
