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
   $myFile = "../engine/config/confirmation.php";
   $fh = fopen($myFile, 'w') or die("can't open file");
   $stringData = '<?php
$confirmation = \''.$_POST['confirmation'].'\';
$esra = '.$_POST['esra'].';
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
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='index.php'">
</p>
</body>
</html>
<?php
exit; }
include('../engine/config/confirmation.php');
?>
<!doctype html>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
<h3>اعتبارات:</h3>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="confirmation" id="confirmation">
  <p>
    <label for="confirmation">
 متن:</label>
    <textarea class="ckeditor" name="confirmation" id="confirmation"><?php echo $confirmation ?></textarea>
  </p>
  <p>
    <label>esra :
      <input type="radio" name="esra" id="esra" value="true" <?php if($esra){ ?> checked <?php } ?>>
      فعال</label>
    <label>
      <input name="esra" type="radio" id="esra" value="false" <?php if(!$esra){ ?> checked <?php } ?>>
      غیرفعال</label>
  </p>
  <p>
    <input name="form_name" type="hidden" id="form_name" value="sumbitform">
    <input name="submit" type="submit" id="submit" value="ثبت">
  </p>
</form>