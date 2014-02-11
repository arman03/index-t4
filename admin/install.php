<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'installform')
{
   if($_POST['password'] != $_POST['confirmpassword'])
   { ?>
<p dir="rtl" style="color:red">رمز و تاییدیه آن باید یکی باشند. </p>
<?php }
   else
   {
      $myFile = "../engine/config/admin.php";
      $fh = fopen($myFile, 'w') or die("can't open file");
      $stringData = '<?php
$username = \''.$_POST['newusername'].'\';
$password = \''.md5($_POST['newpassword']).'\';
?>';
      fwrite($fh, $stringData);
      fclose($fh);
	  ?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<title>نصب ایندکس</title>
</head>
<body>
<h3>نصب ایندکس به پایان رسید!</h3>
<p>از ایندکس لذت ببرید!</p>
<p>
  <input onclick="window.open('../')" type="button" name="button" id="button" value="صفحه اصلی">
  <input onclick="window.open('.')" type="button" name="button" id="button" value="ادمین پنل">
</p>
</body>
</html><?php
	  unlink('install.php');
	  exit;
   }
}
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<title>نصب ایندکس</title>
</head>
<body>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="installform" id="installform">
  <h3>ساخت اکانت ادمین</h3>
  <p>شما هنوز ایندکس را نصب نکرده اید.<br>
    نگران نباشید!<br>
    نصب این ایندکس فوق العاده آسان است!<br>
    تنها کافیست فرم زیر را پر کنید: </p>
  <p>
    <label for="username">نام کاربری:</label>
    <input name="username" type="text" required id="username">
  </p>
  <p>
    <label for="password">رمز عبور:</label>
    <input name="password" type="password" required id="password">
  </p>
  <p>
    <label for="confirmpassword">تکرار رمز عبور:</label>
    <input name="confirmpassword" type="password" required id="confirmpassword">
    <input name="form_name" type="hidden" id="form_name" value="installform">
  </p>
  <p>
    <input name="install" type="submit" id="install" value="نصب ایندکس">
  </p>
  <p>برنامه نویسی شده توسط سیاوش بامشادنیا (amtr)</p>
  <p>تغییر نام برنامه نویس، شرعا حرام می باشد.</p>
</form>
</body>
</html>