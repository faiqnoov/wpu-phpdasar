<!-- pengondisian -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Struktur Kendali</title>
	<style>
		.warna-baris {
			background-color: silver;
		}
	</style>
</head>
<body>

    <table border="1", cellpadding="10", cellspacing="0">
		<!-- gaya penulisan/sintaks templating -- memisahkan tag php dan HTML -->
		<?php for($i=1; $i<=5; $i++) : ?>
			<?php if($i % 2 == 1) : ?>
				<tr class="warna-baris">
			<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for($j=1; $j<=5; $j++) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>	
			</tr>
		<?php endfor; ?>
	</table>
	

</body>
</html>