<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'video_bookmark_gallery';

$db = new mysqli(
	$host,
	$username,
	$password,
	$database
);

// if ($db->connect_error) {
// 	$error = $db->connect_error;
// 	echo $error;
// }

$db->set_charset('utf8');