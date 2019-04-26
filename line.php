 <?php
  

function send_LINE($type,$msg){
 $access_token = 'DkKMLkna1FyfJLGrgEE31N/O3AIGX5Tb++VrS6wR9XC3UQsWWCWP4g4+81tHgXl6CveXfsrZKLrtK9V/WCc9OGFPu8PaMw7NGNVXX/2fR1oOUYVgliqoJ40IBF/SrFoqZf81in2m5VDAD6eLmXd8nAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => $type,
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U3bcaee219ee640876a8bc22bb4559730',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

function sendpic_LINE($type,$msg,$msg2){
  $access_token = 'DkKMLkna1FyfJLGrgEE31N/O3AIGX5Tb++VrS6wR9XC3UQsWWCWP4g4+81tHgXl6CveXfsrZKLrtK9V/WCc9OGFPu8PaMw7NGNVXX/2fR1oOUYVgliqoJ40IBF/SrFoqZf81in2m5VDAD6eLmXd8nAdB04t89/1O/w1cDnyilFU='; 
 
   $messages = [
         'type' => $type,
         'originalContentUrl' => $msg,
         'previewImageUrl' => $msg2
         //'text' => $text
       ];
 
       // Make a POST Request to Messaging API to reply to sender
       $url = 'https://api.line.me/v2/bot/message/push';
       $data = [
 
         'to' => 'U3bcaee219ee640876a8bc22bb4559730',
         'messages' => [$messages],
       ];
       $post = json_encode($data);
       $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
 
       $ch = curl_init($url);
       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
       $result = curl_exec($ch);
       curl_close($ch);
 
       echo $result . "\r\n"; 
 }
?>
