<!-- https://www.codepile.net/raw/OEWY7Q1G.php
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro “database” e un file con tutta la logica. -->

<?php
	include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: yellow;
		}
		h1 {
			text-align: center;
		}
		.hotel {
			width: 500px;
			margin: 20px auto;
			background-color: red;
		}
		.hotel .name {
			color: blue;
		}
		.hotel .description {
			color: lightblue;
		}
		.hotel .parking {
			
		}
		.hotel .vote {
			
		}
		.hotel .distance_to_center {
			
		}
	</style>
	<title>snack-03 - php-snacks-block-1</title>
</head>
<body>
	<h1>snack-03</h1>
	<?php foreach ($hotels as $hotel) { ?>
	<?php
		$name = $hotel['name'];
		$description = $hotel['description'];
		if ($hotel['parking']) {
			$parking = 'C\'e un parcheggio privato.';
		} else {
			$parking = 'Non c\'e\' un parcheggio privato.';
		};
		$vote = $hotel['vote'];
		$distance_to_center = $hotel['distance_to_center'];
	?>
		<div class='hotel'>
			<h2 class='name'>Nome: <?php echo $name ?></h2>
			<h3 class='description'>Descrizione: <?php echo $description ?></h3>
			<p class='parking'>Parcheggio: <?php echo $parking ?></p>
			<p class='vote'>Recensioni: <?php echo $vote ?></p>
			<p class='distance_to_center'>Distanza dal centro: <?php echo $distance_to_center ?> KM</p>
		</div>
	<?php } ?>
</body>
</html>