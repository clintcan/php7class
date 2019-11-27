<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Lab 14</title>
</head>
<body>

<?php

ini_set('display_errors',0); // <- no logs comparison with error_reporting(0);  <-with logs

if (isset($_POST['submit'])){
	$to_check = array ( $_POST['link1'] => $_POST['link2']
	);
	/*
	"www.corrosive.co.uk" => "/index.html",
	"www.virgin.com" => "/notthere.html",
	"www.4332blah.com" => "/nohost.html"
	*/
	foreach ( $to_check as $host => $page )
	{
	$fp = fsockopen( "$host", 80, $errno, $errdesc, 10);
	print "Trying $host<BR>\n";
	if ( ! $fp )
	{
	print "Couldn't connect to $host:\n<br>Error: $errno\n<br>Desc:
	$errdesc\n";
	print "<br><hr>";
	continue;
	}
	print "Trying to get $page<br>\n";
	fputs( $fp, "HEAD $page HTTP/1.0\r\n\r\n" );
	print fgets( $fp, 1024 );
	print "<br><hr>";
	fclose( $fp );
	}
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<table border="1" bordercolor="#0000FF" cellspacing="0" cellpadding="5px">
    <tr>
    	<th>Domain</td>
    	<th>Link</td>
    </tr>
    <tr>
    	<td><input type="text" name="link1" /></td>
    	<td><input type="text" name="link2" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="link1" /></td>
    	<td><input type="text" name="link2" /></td>
    </tr>
    <tr>
    	<td><input type="text" name="link1" /></td>
    	<td><input type="text" name="link2" /></td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><input type="submit" name="submit" value="submit" /></td>
    </tr>
</table>

</form>


</body>
</html>