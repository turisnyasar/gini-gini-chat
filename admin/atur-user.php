<?php
include "../config.php";
if (!is_admin()) {
	kembali("index.php");
}
include "header.php";
?>
<main>
<?php 
tampil_pesan();
include "admin-nav.php";
?>

<div class='panel3'>
<section class='bagian'>
		<h2 class='h2'>Pengaturan User</h2>	
		
		</section>
  </div>

</main>
<?php
include "../footer.php";
?>