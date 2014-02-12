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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'sumbitform')
{
   $myFile = "../engine/config/info.php";
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
   include('done.php');
   exit;
}

include('../engine/config/info.php');
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<script src="ckeditor/ckeditor.js"></script>
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
<h3>تنظیمات:</h3>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="info" id="info">
  <p>
    <input name="form_name" type="hidden" id="form_name" value="sumbitform">
    <label for="title">عنوان سایت:</label>
    <input name="title" type="text" id="title" value="<?php echo $title ?>">
  </p>
  <p>
    <label for="description">توضیحات:</label>
    <input name="description" type="text" id="description" value="<?php echo $description ?>">
  </p>
  <p>
    <label for="keywords">کلمات کلیدی صفحات:</label>
    <input name="keywords" type="text" id="keywords" value="<?php echo $keywords ?>">
  </p>
  <p>
    <label for="header">header (کدهای جاوا اسکریپت یا html مانند کدهای گوگل وبمستر):</label>
    <textarea name="header" id="header"><?php echo $header ?></textarea>
  </p>
  <p>
    <label for="footer">footer (کدهای جاوا اسکریپت یا html مانند کدهای آمارگیر):</label>
    <textarea name="footer" id="footer"><?php echo $footer ?></textarea>
  </p>
  <p>
    <label for="forum_link">لینک فروم:</label>
    <input name="forum_link" type="text" id="forum_link" value="<?php echo $forum_link ?>">
  </p>
  <p>
    <label>
      وضعیت سایت :  
      <input type="radio" name="active" value="true" id="active" <?php if($active){ ?> checked <?php } ?>>
      فعال</label>
    <label>
      <input type="radio" name="active" value="false" id="active" <?php if(!$active){ ?> checked <?php } ?>>
    غیرفعال</label>
  </p>
  <p>
    <label for="offline">متنی که زمان غیرفعال بودن نمایش داده خواهد شد:</label>
    <textarea class="ckeditor" name="offline" id="offline"><?php echo $offline_message ?></textarea>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="ثبت">
    <input type="reset" name="reset" id="reset" value="بازگرداندن فرم به حالت قبلی">
  </p>
</form>