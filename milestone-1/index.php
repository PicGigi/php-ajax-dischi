<!-- Mi sono permesso di copiare lo style e il database fatto da Henry per questione di tempo.. l'index lo faccio io, promesso! -->

<?php include __DIR__ . '/db/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/style.css">
	<title>Dischi</title>
</head>
<body>
	<header>
		<img src="img/spotify-logo.png" alt="">
	</header>
	<main>
		<div class="container">
			<div id="discs-container">

				<?php foreach ($arr_discs as $disc) { ?> <!-- foreach php per i dischi -->

					<div class="disc"> <!-- disco -->
						<img src="<?= $disc['poster'] ?>" alt="">
						<h3><?= $disc['title'] ?></h3>
						<span><?= $disc['author'] ?></span>
						<span><?= $disc['year'] ?></span>
					</div>

				<?php
				} ?>
				
			</div>
		</div>
	</main>
</body>
</html>