<?php 
include "config.php";
include "header.php"; 
?>
<main>
<?php tampil_pesan(); ?>
	<div class='panel'>
		<section class='bagian'>
			<h2 class='h2'>Chat</h2>
			<div class='daftar'>
				<?php include "chat.php"; ?>

		  </div>
    </section>
  </div>

	<?php
	if ( is_login() ) {
		include "index-part2.php";
	}
	else {
		include "index-part1.php";
	}
?>


</main>
<?php
include "footer.php";
?>