<?php

header("Cache-control: private"); 
header("Cache-Control: no-cache, must-revalidate"); 
header ("Pragma: no-cache"); 

require_once '../includes/init.php';
date_default_timezone_set("Asia/Manila");

$depts = array(
				'ob_gyne'	=> array(),
				'dental' 	=> array(),
				'medicine' 	=> array(),
				'pedia' 	=> array(),
				'surgical' 	=> array(),
			);

$querystr = "SELECT priority.priority_number, patient.name, patient.mobile, priority.timestamp, priority.dept
			FROM patient
			LEFT JOIN priority
			ON patient.id = priority.patient_id
			WHERE priority.status = 'attended'
			ORDER BY priority.timestamp DESC";
$patients = $database->query($querystr);

foreach ($patients as &$patient) {
	$patient['name'] = ucwords($patient['name']);
	$patient['timestamp'] = date('D, M. d, Y - g:i A', $patient['timestamp']);
	$depts[$patient['dept']][] = $patient;
}
echo json_encode($depts);