<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: login.php');
   exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
   header('Location: login.php');
   exit;
}
if (session_id() == "")
{
   session_start();
}
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<script src="jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
<link href="jquery/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jquery/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<title>کنترل پنل ادمین</title>
</head>
<body>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="logoutform" id="logoutform">
  <p>
    <input type="submit" name="logout'" id="logout'" value="خروج">
    <input name="form_name" type="hidden" id="form_name" value="logoutform">
  </p>
</form>
<p>
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='index.php'">
</p>
<h3>ریست ایندکس:</h3>
<p>
  <input type="button" name="resetall" id="resetall" value="ریست کل ایندکس" onClick="window.location='reset/all.php'">
</p>
<p>
  <input type="button" name="resetservers" id="resetservers" value="ریست سرورها" onClick="window.location='reset/servers.php'">
</p>
<p>
  <input type="button" name="resetnews" id="resetnews" value="ریست اخبار" onClick="window.location='reset/news.php'">
</p>
<p>
  <input type="button" name="resetconfirmation" id="resetconfirmation" value="ریست اعتبارات" onClick="window.location='reset/confirmation.php'">
</p>
<p>
  <input type="button" name="resetstats" id="resetstats" value="ریست آمار" onClick="window.location='reset/stats.php'">
</p>
<p>
  <input type="button" name="resetinfo" id="resetinfo" value="ریست تنظیمات" onClick="window.location='reset/info.php'">
</p>
</body>
</html>