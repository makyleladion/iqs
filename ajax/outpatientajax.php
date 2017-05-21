<?php

header("Cache-control: private"); 
header("Cache-Control: no-cache, must-revalidate"); 
header ("Pragma: no-cache");  

require_once '../includes/init.php';
date_default_timezone_set("Asia/Manila");
if (isset($_POST['iqs_name']) && isset($_POST['iqs_mobile']) && isset($_POST['iqs_priority']) && isset($_POST['iqs_department'])) {
	
	foreach ($_POST as &$p) {
		$p = strtolower(trim($p));
	}

	extract($_POST);

	// Convert mobile number into international prefix
	if ($iqs_mobile[0] == '0') {
		$numberMain = substr($iqs_mobile, 1);
		$iqs_mobile = '63' . $numberMain;
	}

	// Insert patient
	$patient = $database->query("SELECT * FROM patient WHERE name = :name AND mobile = :mobile", array(
		':name' => $iqs_name,
		':mobile' => $iqs_mobile,
	));

	// Initialize priority data
	$insertPatient = array(
		'name' => $iqs_name,
		'mobile' => $iqs_mobile,
		'timestamp' => time(),
	);

	if (count($patient) <= 0) {
		$database->insertRow('patient', $insertPatient);
		$patient = $database->getRow('patient', 'timestamp', $insertPatient['timestamp']);
	} else {
		$patient = $patient[0];
	}

	$database->insertRow('priority', array(
		'patient_id' 		=> $patient['id'],
		'dept'				=> $iqs_department,
		'priority_number' 	=> (string) $iqs_priority,
		'status' 			=> 'waiting',
		'timestamp' 		=> $insertPatient['timestamp'],
	));

	$tbl = '<tr>';
	$tbl .= '<td>' . $iqs_priority . '</td>';
	$tbl .= '<td>' . ucwords($patient['name']) . '</td>';
	$tbl .= '</tr>';

	echo $tbl;
}