<?php
include "../config.php";
if (is_admin()) {
	kembali("home.php");
}
include "header.php";
?>
<main>
<?php 
tampil_pesan();
?>
	<div class='panel'>
<section class='bagian'>
<br>
		<h2 class='h2'>Login</h2>	
		<form action='login.php' method='post' class='form1' >
		<table width='100%' class='tabel1'>
		<tr><th>Username</th>
				<td><input type='text' required name='username'>
				</td></tr>
		<tr><th>Password</th>
				<td><input type='password' required name='password'>
				</td></tr>
		</table>
		<button type='submit'>Login</button>
		</form>
		</section>
  </div>
</main>
<?php
include "../footer.php";
?>