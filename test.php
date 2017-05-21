<?php

require_once 'libraries/Nexmo-PHP-lib/src/NexmoMessage.php';

$nexmoSMS = new NexmoMessage('3227cdf8', '8005606f');
$finalizeFormat = "Good day, Glenn Paclijan! Please be informed that your prio-number is 5 numbers away from the prio-number being served now. If you're outside JRB Hospital, please proceed to the OPD Waiting Lounge ASAP. Thank you.";
$info = $nexmoSMS->sendText( '639174003293' , 'JRBHospital', $finalizeFormat);

print_r($info);