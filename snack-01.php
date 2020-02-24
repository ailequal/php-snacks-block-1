<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
	$matches = [
		[
			'home_team' => 'Reds',
			'home_team_score' => 20,
			'guest_team' => 'Lions',
			'guest_team_score' => 30
		],
		[
			'home_team' => 'Kings',
			'home_team_score' => 23,
			'guest_team' => 'Queens',
			'guest_team_score' => 88
		],
		[
			'home_team' => '94s',
			'home_team_score' => 40,
			'guest_team' => 'Yoppi',
			'guest_team_score' => 50
		],
		[
			'home_team' => 'Speedy',
			'home_team_score' => 10,
			'guest_team' => 'Top',
			'guest_team_score' => 70
		],
		[
			'home_team' => 'Riot',
			'home_team_score' => 80,
			'guest_team' => 'Peace',
			'guest_team_score' => 22
		]
	];
	// var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		h1 {
			color: blue;
		}
	</style>
	<title>snack-01 - php-snacks-block-1</title>
</head>
<body>
	<h1>snack-01</h1>
	<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et enim amet voluptatibus vel eveniet ratione eius perferendis nam maiores, assumenda, sapiente ex error nostrum, a voluptas molestias quidem saepe reiciendis!</p>
	<ul>
		<?php foreach ($matches as $match) { ?>
		<li>
			<?php echo $match['home_team'] . ' - ' . $match['guest_team'] . ' | ' . $match['home_team_score'] . '-' . $match['guest_team_score'] ?>
		</li>	
		<?php } ?>
	</ul>
</body>
</html>