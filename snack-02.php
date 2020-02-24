<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
https://www.codepile.net/pile/R2K5d68z -->

<?php
$posts = [
	'10/01/2019' => [
		[
			'title' => 'Post 1',
			'author' => 'Michele Papagni',
			'text' => 'Testo post 1'
		],
		[
			'title' => 'Post 2',
			'author' => 'Michele Papagni',
			'text' => 'Testo post 2'
		],
	],
	'10/02/2019' => [
		[
			'title' => 'Post 3',
			'author' => 'Michele Papagni',
			'text' => 'Testo post 3'
		]
	],
	'15/05/2019' => [
		[
			'title' => 'Post 4',
			'author' => 'Michele Papagni',
			'text' => 'Testo post 4'
		],
		[
			'title' => 'Post 5',
			'author' => 'Michele Papagni',
			'text' => 'Testo post 5'
		],
		[
			'title' => 'Post 6',
			'author' => 'Michele Papagni',
			'text' => 'Testo post 6'
		]
	],
];
// var_dump($posts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			text-align: center;
		}
		h1 {
			color: blue;
		}
		p {
			text-align: left;
		}
		.container {
			max-width: 500px;
			width: 100%;
			margin: auto;
		}
		.info {
			display: flex;
			justify-content: space-around;
		}
	</style>
	<title>snack-02 - php-snacks-block-1</title>
</head>
<body>
	<h1>snack-02</h1>
	<div class='container'>
		<div class='post'>
			<h2 class='title'>
				title
			</h2>
			<p class='text'>
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum totam corporis voluptas. Expedita dolorem eius pariatur, quod sit beatae delectus blanditiis quos accusantium distinctio voluptatibus harum ducimus doloribus! Architecto, deleniti.
			</p>
			<div class='info'>
				<span class='date'>21-04-18</span>
				<span class='author'>ailequal</span>
			</div>
		</div>

		<?php foreach ($posts as $key => $date) { ?>
			<?php foreach ($date as $post) { ?>
		<div class='post'>
			<h2 class='title'>
				<?php echo $post['title']; ?>
			</h2>
			<p class='text'>
			<?php echo $post['text']; ?>
			</p>
			<div class='info'>
				<span class='date'><?php echo $key; ?></span>
				<span class='author'><?php echo $post['author']; ?></span>
			</div>
		</div>
			<?php } ?>
		<?php } ?>
	</div>
</body>
</html>