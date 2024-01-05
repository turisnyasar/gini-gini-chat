<?php
include "header.php";
?>
<main>
	<div class='panel'>
		<section class='bagian'>
			<h2 class='h2'>Error</h2>
			<?php 
			echo mysqli_error($koneksi);
			?>
		</section>
  </div>
</main>
<?php
include "footer.php";
?>