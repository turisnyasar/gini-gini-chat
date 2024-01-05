<?php
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

	echo get_chat($hasil[$i]['IDchat'], 
								$hasil[$i]['nama'],
								$hasil[$i]['tgl'],
								urldecode($hasil[$i]['teks']));

	echo replies($hasil[$i]['IDchat']);
}

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

	$susun = "<div class='daftar_replies'>";

	for($i=0; $i<count($hasil2); $i++){
		$susun .= get_replies($hasil2[$i]);
	}

	$susun .= "</div>";
	return $susun;
}

function get_chat($IDchat, $nama, $tgl, $teks){
	$chat = "<article class='chat' id='chat_$IDchat'>
				<h3 class='titlebar kecil merah'>
				<var>$nama</var>
				<time>$tgl</time>
				</h3>
				<p>$teks</p>
				<input type='hidden' name='kaitan' 
					value='$IDchat'>
				</article>";
	if ( is_login() ){
		$chat .= "<div class='chat_links'>
				 <a href='javascript:reply($IDchat)'
				 	  class='links'>Balas</a>
				</div>";
	}
	return $chat;
}


function get_replies($array){
	$teks = urldecode($array['teks']);
	return "<article class='reply'>
				<h3 class='titlebar kecil merah'>
				<var>$array[nama]</var>
				<time>$array[tgl]</time>
				</h3>
				<p>$teks</p>
				</article>";
}