<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Lab 13</title>
</head>
<body>

<?php

/*

Laboratory Exercise #13: Getting IP address of one browsing the site
In this exercise, make a program that will:
1. Get the IP address of the one browsing the site
2. Get the host of the returned IP address

*/

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

echo 'User Real IP - '.getUserIpAddr();

echo gethostbyaddr($id)."<br>";
echo gethostbyname($id)."<br>";






?>
</body>
</html>