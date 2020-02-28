<?php
	// not finished

	// import db.php into server.php
	include 'db.php';
	// var_dump($hotels);

	// get the selection from the get request
	$select_parking = $_GET['parking'] == 'true' ? true : false;
	$select_vote = $_GET['vote'];
	$select_distance_to_center = $_GET['distance_to_center'];
	var_dump($select_parking);
	// var_dump($select_vote);
	// var_dump($select_distance_to_center);

	// compare get request with the db.php
	$hotels_filtered = [];
	foreach ($hotels as $hotel) {
		if (!empty($select_parking) && $select_parking === $hotel['parking']) {
			$hotels_filtered[] = $hotel;
		}
	}

	// print results
	if (empty($hotels_filtered)) {
		var_dump($hotels);
	} else {
		var_dump($hotels_filtered);
	}
?>
