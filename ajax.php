<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
	header("HTTP/1.0 404 Not Found");
}

$frames = [
	[
		'name' => 'Xuần Tình Nguyện',
		'src'  => 'uploads/year-of-chicken.png'
	],
	[
		'name' => 'Google DayX',
		'src'  => 'uploads/rsz_1gdayxhcmcframe-png-01.png'
	],
];

header('Content-Type: application/json');
echo json_encode( $frames );
?>