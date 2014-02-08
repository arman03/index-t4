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
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='../'">
</p>
</body>
</html>