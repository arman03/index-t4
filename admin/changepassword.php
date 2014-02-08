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
   unset($_SESSION['username']);
   header('Location: login.php');
   exit;
}
include('../engine/config/admin.php');
$error_message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'changepassword')
{
   if(md5($_POST['password']) != $password)
   {
      $error_message = 'پسورد خود را اشتباه وارد کرده اید.';
   }
   elseif($_POST['newpassword'] != $_POST['confirmpassword'])
   {
      $error_message = 'پسورد جدید باید با تاییدیه آن یکی باشد.';
   }
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
      $error_message = 'با موفقیت تغییر کرد.';
   }
}
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
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
<h3>تغییر پسورد:</h3>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="changepasswordform" id="changepasswordform">
  <p>
    <label for="password">
      <input name="form_name" type="hidden" id="form_name" value="changepassword">
    </label>
    <label for="newusername">نام کاربری جدید:</label>
    <input name="newusername" type="text" id="newusername" value="<?php echo $username ?>">
  </p>
  <p>
    <label for="password">پسورد فعلی:</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <label for="newpassword">پسورد جدید:</label>
    <input type="password" name="newpassword" id="newpassword">
  </p>
  <p>
    <label for="confirmpassword">تکرار پسورد:</label>
    <input type="password" name="confirmpassword" id="confirmpassword">
  </p>
  <p style="color:red"><?php echo $error_message; ?></p>
  <p>
    <input type="submit" name="submit" id="submit" value="ثبت">
    <input type="reset" name="reset" id="reset" value="پاک کردن فرم">
  </p>
</form>