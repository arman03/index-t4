<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: ../login.php');
   exit;
}

$myFile = "../../engine/config/stats.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$stats_servers = 0;
$stats_server1 = array(\'\',\'\',\'\',\'\');
$stats_server2 = array(\'\',\'\',\'\',\'\');
$stats_server3 = array(\'\',\'\',\'\',\'\');
$stats_server4 = array(\'\',\'\',\'\',\'\');
$stats_server5 = array(\'\',\'\',\'\',\'\');
$stats_server6 = array(\'\',\'\',\'\',\'\');
$stats_server7 = array(\'\',\'\',\'\',\'\');
$stats_server8 = array(\'\',\'\',\'\',\'\');
$stats_server9 = array(\'\',\'\',\'\',\'\');
$stats_server10 = array(\'\',\'\',\'\',\'\');
?>';
fwrite($fh, $stringData);
fclose($fh);
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<title>کنترل پنل ادمین</title>
</head>
<body>
<p>با موفقیت ریست شد.</p>
<p>
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='../index.php'">
</p>
</body>
</html>