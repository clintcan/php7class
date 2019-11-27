<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>XML JSON</title>
</head>
<body>
<?php
    //https://api.openweathermap.org/data/2.5/weather?q=Manila&appid=b4396b5fdb2078756f77d6f7eec6273a
    //https://api.openweathermap.org/data/2.5/weather?q=Manila,PH&appid=b4396b5fdb2078756f77d6f7eec6273a&mode=xml
?>

<hr />
<h3><strong>Sample</strong></h3>
	<?php
    $data = "<?xml version = '1.0' encoding = 'UTF-8'?>
    <note>
    <Course>Android</Course>
    <Subject>Android</Subject>
    <Company>Worldtech</Company>
    <Price>$10</Price>
    </note>";
    $xml = simplexml_load_string($data) or die("Error: Cannot create object");
		echo "<pre>";
		print_r($xml);
		echo "</pre>";
	?>
<hr />
	<h3><strong>XML</strong></h3>
	<?php
		//$url = "https://api.openweathermap.org/data/2.5/weather?q=Manila,PH&appid=b4396b5fdb2078756f77d6f7eec6273a&mode=xml";
		//$xml = simplexml_load_file($url) or die("Error: Cannot create object");
		//echo "<pre>";
		
		?>
        
        <table cellpadding="5px" bgcolor="#006600">
        	<tr><td>1</td><td rowspan="4">1</td></tr>
        	<tr><td>1</td></tr>
        	<tr><td>1</td></tr>
        	<tr><td>1</td></tr>
        </table>
        
        <?php
		
		/*
		echo "Country : ".$xml->city['name']."<br>";
		echo "City : ".$xml->city->country."<br>";
		echo "Humidity : ".$xml->humidity['value'].$xml->humidity['unit']."<br>";
		echo "Wind Speed : ".$xml->wind->speed['value'].$xml->wind->speed['unit']."<br>";
		echo "Weather : ".$xml->weather['value']."<br>";

		echo "</pre>";
		echo "<hr>";
		echo "<pre>";
		print_r($xml);
		echo "</pre>"; */
	?><hr />




</body>
</html>