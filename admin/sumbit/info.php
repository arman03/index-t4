﻿<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: ../login.php');
   exit;
}

$myFile = "../../engine/config/info.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$title = \''.$_POST['title'].'\';
$description = \''.$_POST['description'].'\';
$keywords = \''.$_POST['keywords'].'\';
$forum_link = \''.$_POST['forum_link'].'\';
$header = \''.$_POST['header'].'\';
$footer = \''.$_POST['footer'].'\';
$active = '.$_POST['active'].';
$offline_message = \''.$_POST['offline'].'\';
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