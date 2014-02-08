<?php
if(!file_exists('../engine/config/admin.php'))
{
	header('Location: install.php');
	exit;
}
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
<title>کنترل پنل ادمین</title>
</head>
<body style="text-align: center">
<form action="<?php echo basename(__FILE__); ?>" method="post" name="logoutform" id="logoutform">
  <input type="submit" name="logout" id="logout" value="خروج">
  <input name="form_name" type="hidden" id="form_name" value="logoutform">
</form>
<p>
  <input onClick="window.open('../')" type="button" name="site" id="site" value="نمایش سایت">
</p>
<p>
  <input onClick="window.location='servers.php'" type="button" name="servers" id="servers" value="سرورها">
</p>
<p>
  <input onClick="window.location='news.php'" type="button" name="news" id="news" value="اخبار">
</p>
<p>
  <input onClick="window.location='confirmation.php'" type="button" name="confirmation" id="confirmation" value="اعتبارات">
</p>
<p>
  <input onClick="window.location='stats.php'" type="button" name="stats" id="stats" value="آمار بازیکنان">
</p>
<p>
  <input onClick="window.location='info.php'" type="button" name="settings" id="settings" value="تنظیمات">
</p>
<p>
  <input onClick="window.location='filemanager.php'" type="button" name="filemanager" id="filemanager" value="فایل منیجر">
</p>
<p>
  <input onClick="window.location='changepassword.php'" type="button" name="changepassword" id="changepassword" value="تغییر پسورد">
</p>
<p>
  <input onClick="window.location='reset.php'" type="button" name="reset" id="reset" value="ریست ایندکس">
</p>
<p>طراحی شده توسط سیاوش بامشادنیا</p>
</body>
</html>