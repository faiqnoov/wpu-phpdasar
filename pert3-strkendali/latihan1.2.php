<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kendali</title>
</head>
<body>

    <table border="1", cellpadding="10", cellspacing="0">
		<!-- gaya penulisan/sintaks templating -- memisahkan tag php dan HTML -->
		<?php for($i=1; $i<=3; $i++) { ?>
			<tr>
				<?php for($j=1; $j<=5; $j++) { ?>
					<td><?php echo "$i, $j"; ?></td>
				<?php } ?>	
			</tr>
		<?php } ?>
	</table>

    <table border="1", cellpadding="10", cellspacing="0">
		<!-- gaya penulisan/sintaks templating -- memisahkan tag php dan HTML -->
		<?php for($i=1; $i<=3; $i++) : ?>
			<tr>
				<?php for($j=1; $j<=5; $j++) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>	
			</tr>
		<?php endfor; ?>
	</table>
</body>
</html>