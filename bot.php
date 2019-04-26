<?php
 require("pub.php");
 require("line.php");

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON

$events = json_decode($content, true);
console.log("send");
// Validate parsed JSON data
if (!is_null($events['type']) and is_null($events['msg2'])) {
	
	send_LINE($events['type'],$events['msg']);
		
	echo "OK";
}
else if(!is_null($events['type'] and !is_null($event['msg2'])){

	sendpic_LINE($event['type'],$events['msg'],$events['msg2'])

}
if (!is_null($events['events'])) {
	echo "line bot";
	console.log("Send")
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
//$Topic = "nodemcu" ;
//$text = "Test";
//getMqttfromlineMsg($Topic,$text);
echo "OK3";
?>
