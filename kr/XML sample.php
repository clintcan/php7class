<?php

$content ='<?xml version="1.0" encoding="UTF-8"?><notes><note><to>Tove1</to><from>Jani1</from><heading>Reminder1</heading><body>Dont Forget1</body></note><note><to>Tove2</to><from>Jani2</from><heading>Reminder2</heading><body>Dont Forget2</body></note></notes>';
$xml = simplexml_load_string($content);
foreach($xml->note as $notes){
echo "To: $notes->to <br>";
}

?>
