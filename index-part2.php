<div class='panel'>


		<section class='bagian'>
		<h2 class='h2'>Profil</h2>	
		<p>Username : <?= $_SESSION['user']['username'] ?> </p>
		<nav id='profil_nav'>
			<a href='logout.php' class='menu1'>Logout</a>
		</nav>
		</section>


		<section class='bagian'>
		<h2 class='h2'>Ketik</h2>	
		<form action='ketik.php' method='post' class='form1' >
		<div id='wadah_kaitan'></div>
		<table width='100%' class='tabel1'>
		<tr><td>
			<textarea name='teks' id='areateks' maxlength="280" required></textarea>
			</td></tr>
		</table>
		<button type='submit'>Kirim Pesan</button>
		</form>
		<div id='default_kaitan'>
		<input type='hidden' name='kaitan' value='0'>
		</div>
		</section>
		
  </div>

	<script>
clear()

function reply(ID) {
	wadah_kaitan.innerHTML = 
	"<div class='reply'>"
	+ "<a name='anchor'>Membalas untuk :</a>"
	+ document.getElementById("chat_" + ID).innerHTML
	+ "<h3><a href='javascript:clear()'>Clear</a></h3>"
	+ "</div>"
	areateks.focus()
	window.location.href = "#anchor"
}

function clear() {
	wadah_kaitan.innerHTML = default_kaitan.innerHTML
}
	</script>