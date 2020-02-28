<!-- https://www.codepile.net/raw/OEWY7Q1G.php
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro “database” e un file con tutta la logica. -->

<!-- https://www.codepile.net/pile/OEWY7Q1G
Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
Se non c’è un filtro, tutti gli hotel con tutti i dati -->

<!-- it will only work if you put all three get requests -->
<!-- http://localhost:8888/php-snacks-block-1/snack-04/snack-04.php?parking=true&vote=2&distance_to_center=50 -->

<?php
	include 'db.php';
	$select_parking = $_GET['parking'] == 'true' ? true : false;
	$select_vote = $_GET['vote'];
	$select_distance_to_center = $_GET['distance_to_center'];
	// var_dump($select_parking);
	// var_dump($select_vote);
	// var_dump($select_distance_to_center);
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
	<title>snack-04 - php-snacks-block-1</title>
</head>
<body>
	<h1>snack-04</h1>
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
		<?php	if ($select_parking == $hotel['parking'] && $select_vote == $vote && $select_distance_to_center == $distance_to_center) { ?>
			<div class='hotel'>
				<h2 class='name'>Nome: <?php echo $name ?></h2>
				<h3 class='description'>Descrizione: <?php echo $description ?></h3>
				<p class='parking'>Parcheggio: <?php echo $parking ?></p>
				<p class='vote'>Recensioni: <?php echo $vote ?></p>
				<p class='distance_to_center'>Distanza dal centro: <?php echo $distance_to_center ?> KM</p>
			</div>
		<?php	} ?>
	<?php } ?>
</body>
</html>