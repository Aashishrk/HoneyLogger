<html>
<head> <title>404 Not found</title></head>
<body bgcolor=white>
<h1>404 not found</h1>


The requested mail could not be sent as it has been detected that you are a spammer.
You are being reported and your ip address has been logged.
Thank You have a bad day.
Bye Bye
<img src="trollface.jpg"/>
<?php
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else {
  $ip = $_SERVER["REMOTE_ADDR"];
}
if(isset($ip))
{
  $myFile = '/var/www/html/website/honey_log.txt';
  if (!file_exists($myFile)) {
  }
  else if(!$fh = fopen($myFile, 'a')) {
  }
  else {
    $output = $ip."--".gethostbyaddr($ip)."--".date("Y:m:d:H:i:s");
    fwrite($fh, $output);
    fclose($fh);


  }


}



?>
</body>
</html>
