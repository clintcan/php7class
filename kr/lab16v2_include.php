<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab16</title>
</head>

<body>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<table border="1" bordercolor="#0000FF" cellspacing="0" cellpadding="5px">
    <tr>
    	<th>Image Upload</td>
    </tr>
    <tr>
    	<td align="center"><input type="file" name="file" /></td>
    </tr>
    <tr>
    	<td align="center"><input type="submit" name="submit" value="submit" /></td>
    </tr>
</table>

</form>

<?php
if (isset($_POST['submit'])){
	$file = $_POST['file'];
?>
<img src="<?php echo $file; ?>" /> - Original Image
<img src="<?php echo "imageresize.php?file=$file"; ?>" />  - Resized Image
<?php
}?>
</body>
</html>