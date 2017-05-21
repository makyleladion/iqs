<?php

require_once 'includes/init.php';

$settings = $database->query("SELECT * FROM settings ORDER BY timestamp DESC LIMIT 1");
$settings = end($settings);
if ($settings) {
	extract($settings);
}

require_once 'views/settings.php';