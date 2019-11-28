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
		$url = "https://api.openweathermap.org/data/2.5/weather?q=Manila,PH&appid=b4396b5fdb2078756f77d6f7eec6273a&mode=xml";
		$xml = simplexml_load_file($url) or die("Error: Cannot create object");
		?>
        
        <table cellpadding="10px" cellspacing="0" bgcolor="#006600">
        	<tr><td><strong><?php echo "Country : ".$xml->city['name']; ?></strong></td>
            	<td><strong><?php echo "Weather : ".$xml->weather['value']; ?></strong></td>
           	</tr>
        	<tr><td><strong><?php echo "City : ".$xml->city->country; ?></strong></td>
            	<td rowspan="3"><img src="cloud.png" width="150px" /></td>
           	</tr>
        	<tr><td><strong><?php echo "Humidity : ".$xml->humidity['value'].$xml->humidity['unit']; ?></strong></td></tr>
        	<tr><td><strong><?php echo "Wind Speed : ".$xml->wind->speed['value'].$xml->wind->speed['unit']; ?></strong></td></tr>
        </table>

<hr />
	<h3><strong>JSON</strong></h3>
	<?php
		
		$url2 = "https://api.openweathermap.org/data/2.5/weather?q=Manila,PH&appid=b4396b5fdb2078756f77d6f7eec6273a&mode";
		$djson = file_get_contents($url2);
		$json = json_decode($djson);
		
		echo $json->name;
	?>
<hr />


</body>
</html>