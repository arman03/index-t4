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
$stats_servers = \''.$_POST['servers'].'\';
$mysql_server = \''.$_POST['hostname'].'\';
$stats_server1 = array(\''.$_POST['perfix1'].'\',\''.$_POST['dbname1'].'\',\''.$_POST['dbuser1'].'\',\''.$_POST['dbpassword1'].'\');
$stats_server2 = array(\''.$_POST['perfix2'].'\',\''.$_POST['dbname2'].'\',\''.$_POST['dbuser2'].'\',\''.$_POST['dbpassword2'].'\');
$stats_server3 = array(\''.$_POST['perfix3'].'\',\''.$_POST['dbname3'].'\',\''.$_POST['dbuser3'].'\',\''.$_POST['dbpassword3'].'\');
$stats_server4 = array(\''.$_POST['perfix4'].'\',\''.$_POST['dbname4'].'\',\''.$_POST['dbuser4'].'\',\''.$_POST['dbpassword4'].'\');
$stats_server5 = array(\''.$_POST['perfix5'].'\',\''.$_POST['dbname5'].'\',\''.$_POST['dbuser5'].'\',\''.$_POST['dbpassword5'].'\');
$stats_server6 = array(\''.$_POST['perfix6'].'\',\''.$_POST['dbname6'].'\',\''.$_POST['dbuser6'].'\',\''.$_POST['dbpassword6'].'\');
$stats_server7 = array(\''.$_POST['perfix7'].'\',\''.$_POST['dbname7'].'\',\''.$_POST['dbuser7'].'\',\''.$_POST['dbpassword7'].'\');
$stats_server8 = array(\''.$_POST['perfix8'].'\',\''.$_POST['dbname8'].'\',\''.$_POST['dbuser8'].'\',\''.$_POST['dbpassword8'].'\');
$stats_server9 = array(\''.$_POST['perfix9'].'\',\''.$_POST['dbname9'].'\',\''.$_POST['dbuser9'].'\',\''.$_POST['dbpassword9'].'\');
$stats_server10 = array(\''.$_POST['perfix10'].'\',\''.$_POST['dbname10'].'\',\''.$_POST['dbuser10'].'\',\''.$_POST['dbpassword10'].'\');
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
<p>با موفقیت ثبت شد.</p>
<p>
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='../index.php'">
</p>
</body>
</html>