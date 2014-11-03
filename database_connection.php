<?php

$local = true;

if ($local == true) {
	DEFINE('DATABASE_USER', 'root');
	DEFINE('DATABASE_PASSWORD', '');
	DEFINE('DATABASE_HOST', 'localhost');
	DEFINE('DATABASE_NAME', 'sync');
} else {
	DEFINE('DATABASE_USER', '');
	DEFINE('DATABASE_PASSWORD', '');
	DEFINE('DATABASE_HOST', 'localhost');
	DEFINE('DATABASE_NAME', '');
}

date_default_timezone_set('Europe/Amsterdam');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

if (!$dbc) {
	trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}