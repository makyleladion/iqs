<?php

require_once 'includes/init.php';

date_default_timezone_set("Asia/Manila");
if (isset($_POST['message_format'])) {
	extract($_POST);
	$database->insertRow('settings', array(
		'message_format' => $message_format,
		'no_or_priorities_to_send' => 5,
		'timestamp' => time(),
	));
}

header('location: settings.php');