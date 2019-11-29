<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Graph</title>
</head>

<body>
<center>
<table>
    <tr>
        <td align="left" valign="top">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table border="1" bordercolor="#0000FF" cellspacing="0" cellpadding="5px">
                <tr>
                    <th colspan="2">Value Input</th>
                </tr>
                <tr><td><label>Sean :</label></td><td><input type="number" name="sean" value="0" /></td></tr>
                <tr><td><label>Kr :</label></td><td><input type="text" name="kr" value="0" /></td></tr>
                <tr><td><label>Jao :</label></td><td><input type="text" name="jao" value="0" /></td></tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="submit" /></td>
                </tr>
            </table>
            </form>

        </td>
        <td align="left" valign="top">
		<?php
        if (isset($_POST['submit'])){
        ?>       
            <table border="1" bordercolor="#0000FF" cellspacing="0" cellpadding="5px">
                <tr>
                    <th colspan="2">Graph Output</th>
                </tr>
                <tr><td>
					<?php    
                        $v1 = $_POST['sean'];
                        $v2 = $_POST['kr'];
                        $v3 = $_POST['jao'];
						
						$max = array($v1,$v2,$v3);
						rsort($max);
						$val4 = $max['0'];
												
                        //header("location: graph1.php?sean=$v1&kr=$v2&jao=$v3");
                        echo "<img src='graph1.php?sean=$v1&kr=$v2&jao=$v3&max=$val4' width='400px' />";
                    ?>
                </td></tr>
            </table>
		<?php

		}
		
		
        ?>				
        </td>
    </tr>
</table>
</center>
</body>
</html>