<?php

header("Cache-control: private"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
ini_set('max_execution_time', 300);

require_once '../includes/init.php';
require_once '../libraries/Nexmo-PHP-lib/src/NexmoMessage.php';
$dept = (isset($_GET['dept'])) ? $_GET['dept'] : '';
$querystr = "SELECT priority.priority_number, priority.dept, patient.name, patient.mobile, priority.timestamp, priority.status
			FROM patient
			LEFT JOIN priority
			ON patient.id = priority.patient_id
			WHERE priority.status IN ('waiting','sent') AND priority.dept = '{$dept}'
			ORDER BY priority.timestamp ASC
			LIMIT 6";

$patients = $database->query($querystr);
$currentPriorityNumber = 'None';
$nexmoSMS = new NexmoMessage('e0ebf3ad', '0f00e76b');

$smsFormat = $database->query("SELECT * FROM settings ORDER BY timestamp DESC LIMIT 1");
$smsFormat = (isset($smsFormat[0]['message_format']))?$smsFormat[0]['message_format']:'';

if (isset($patients[0])) {
	$timestamp = intval($patients[0]['timestamp']);
	$settings = array('status' => 'attended');
	$filter[] = array('timestamp=%d', $timestamp);
	$filter[] = array('dept=%s', $dept);
	$database->updateRows('priority', $settings, $filter);
	$currentPriorityNumber = $patients[0]['priority_number'];
	$patients[0]['status'] = 'attended';
}

$filter = array();
foreach ($patients as $patient) {
	if ($patient['status'] == 'waiting') {
		$timestamp = intval($patient['timestamp']);
		$settings = array('status' => 'sent');
		$filter[] = array('timestamp=%d', $timestamp);
		$database->updateRows('priority', $settings, $filter);
		$finalizeFormat = str_replace(':name:', ucwords($patient['name']), $smsFormat);
		$finalizeFormat = str_replace(':dept:', ucwords($patient['dept']), $smsFormat);
		$info = $nexmoSMS->sendText( $patient['mobile'] , 'JRBHospital', $finalizeFormat);
	}
	$filter = array();
}

echo $currentPriorityNumber;