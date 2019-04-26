<?php
 require("pub.php");
 require("line.php");

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON

$events = json_decode($content, true);
// Validate parsed JSON data
echo $events;
if (!is_null($events['ESP']) && !is_null($events['ESP2'])) {
	
	sendpic_LINE($events['ESP'],$events['ESP2']);
	
	echo "OK SEND PICTURE";

} else if (!is_null($events['ESP'])) {
	
	send_LINE($events['ESP']);
		
	echo "OK NO PICTURE";
}
if (!is_null($events['events'])) {
	echo "line bot";
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back

			$Topic = "nodemcu";
			getMqttfromlineMsg($Topic,$text);
			   
			
		}
	}
}
// $Topic = "nodemcu" ;
// $text = "Test";
// getMqttfromlineMsg($Topic,$text);
echo "OK3";
?>
