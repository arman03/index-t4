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
   $myFile = "../engine/config/stats.php";
   $fh = fopen($myFile, 'w') or die("can't open file");
   $stringData = '<?php
$mysql_server = \''.$_POST['hostname'].'\';
$stats_servers = \''.$_POST['servers'].'\';
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
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='index.php'">
</p>
</body>
</html>
<?php
exit; }

include('../engine/config/stats.php');
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<script src="jquery/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jquery/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>
<link href="jquery/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jquery/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jquery/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
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
<h3>آمار بازیکنان:</h3>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="stats" id="stats">
  <p>
  <input name="form_name" type="hidden" id="form_name" value="sumbitform">
    <label for="servers">تعداد سرورها:</label>
    <input name="servers" type="text" id="servers" value="<?php echo $stats_servers ?>">
  </p>
  <p>
    <label for="hostname">نام هاست:</label>
    <input name="hostname" type="text" id="hostname" value="<?php echo $mysql_server ?>">
  </p>
  <div id="statistics">
    <ul>
      <li><a href="#tabs-1">سرور 1</a></li>
      <li><a href="#tabs-2">سرور 2 </a></li>
      <li><a href="#tabs-3">سرور 3</a></li>
      <li><a href="#tabs-4">سرور 4</a></li>
      <li><a href="#tabs-5">سرور 5</a></li>
      <li><a href="#tabs-6">سرور 6</a></li>
      <li><a href="#tabs-7">سرور 7</a></li>
      <li><a href="#tabs-8">سرور 8</a></li>
      <li><a href="#tabs-9">سرور 9</a></li>
      <li><a href="#tabs-10">سرور 10</a></li>
    </ul>
    <div id="tabs-1">
      <p>
        <label for="dbname1">نام دیتابیس:</label>
        <input name="dbname1" type="text" id="dbname1" value="<?php echo $stats_server1[1] ?>">
      </p>
      <p>
        <label for="perfix1">پیشوند دیتابیس:</label>
        <input name="perfix1" type="text" id="perfix1" value="<?php echo $stats_server1[0] ?>">
      </p>
      <p>
        <label for="dbuser1">نام کاربری دیتابیس:</label>
        <input name="dbuser1" type="text" id="dbuser1" value="<?php echo $stats_server1[2] ?>">
      </p>
      <p>
        <label for="dbpassword1">رمز دیتابیس:</label>
        <input name="dbpassword1" type="password" id="dbpassword1" value="<?php echo $stats_server1[3] ?>">
      </p>
    </div>
    <div id="tabs-2">
      <p>
        <label for="dbname2">نام دیتابیس:</label>
        <input name="dbname2" type="text" id="dbname2" value="<?php echo $stats_server2[1] ?>">
      </p>
      <p>
        <label for="perfix2">پیشوند دیتابیس:</label>
        <input name="perfix2" type="text" id="perfix2" value="<?php echo $stats_server2[0] ?>">
      </p>
      <p>
        <label for="dbuser2">نام کاربری دیتابیس:</label>
        <input name="dbuser2" type="text" id="dbuser2" value="<?php echo $stats_server2[2] ?>">
      </p>
      <p>
        <label for="dbpassword2">رمز دیتابیس:</label>
        <input name="dbpassword2" type="password" id="dbpassword2" value="<?php echo $stats_server2[3] ?>">
      </p>
    </div>
    <div id="tabs-3">
      <p>
        <label for="dbname3">نام دیتابیس:</label>
        <input name="dbname3" type="text" id="dbname3" value="<?php echo $stats_server3[1] ?>">
      </p>
      <p>
        <label for="perfix3">پیشوند دیتابیس:</label>
        <input name="perfix3" type="text" id="perfix3" value="<?php echo $stats_server3[0] ?>">
      </p>
      <p>
        <label for="dbuser3">نام کاربری دیتابیس:</label>
        <input name="dbuser3" type="text" id="dbuser3" value="<?php echo $stats_server3[2] ?>">
      </p>
      <p>
        <label for="dbpassword3">رمز دیتابیس:</label>
        <input name="dbpassword3" type="password" id="dbpassword3" value="<?php echo $stats_server3[3] ?>">
      </p>
    </div>
    <div id="tabs-4">
      <p>
        <label for="dbname4">نام دیتابیس:</label>
        <input name="dbname4" type="text" id="dbname4" value="<?php echo $stats_server4[1] ?>">
      </p>
      <p>
        <label for="perfix4">پیشوند دیتابیس:</label>
        <input name="perfix4" type="text" id="perfix4" value="<?php echo $stats_server4[0] ?>">
      </p>
      <p>
        <label for="dbuser4">نام کاربری دیتابیس:</label>
        <input name="dbuser4" type="text" id="dbuser4" value="<?php echo $stats_server4[2] ?>">
      </p>
      <p>
        <label for="dbpassword4">رمز دیتابیس:</label>
        <input name="dbpassword4" type="password" id="dbpassword4" value="<?php echo $stats_server4[3] ?>">
      </p>
    </div>
    <div id="tabs-5">
      <p>
        <label for="dbname5">نام دیتابیس:</label>
        <input name="dbname5" type="text" id="dbname5" value="<?php echo $stats_server5[1] ?>">
      </p>
      <p>
        <label for="perfix5">پیشوند دیتابیس:</label>
        <input name="perfix5" type="text" id="perfix5" value="<?php echo $stats_server5[0] ?>">
      </p>
      <p>
        <label for="dbuser5">نام کاربری دیتابیس:</label>
        <input name="dbuser5" type="text" id="dbuser5" value="<?php echo $stats_server5[2] ?>">
      </p>
      <p>
        <label for="dbpassword5">رمز دیتابیس:</label>
        <input name="dbpassword5" type="password" id="dbpassword5" value="<?php echo $stats_server5[3] ?>">
      </p>
    </div>
    <div id="tabs-6">
      <p>
        <label for="dbname6">نام دیتابیس:</label>
        <input name="dbname6" type="text" id="dbname6" value="<?php echo $stats_server6[1] ?>">
      </p>
      <p>
        <label for="perfix6">پیشوند دیتابیس:</label>
        <input name="perfix6" type="text" id="perfix6" value="<?php echo $stats_server6[0] ?>">
      </p>
      <p>
        <label for="dbuser6">نام کاربری دیتابیس:</label>
        <input name="dbuser6" type="text" id="dbuser6" value="<?php echo $stats_server6[2] ?>">
      </p>
      <p>
        <label for="dbpassword6">رمز دیتابیس:</label>
        <input name="dbpassword6" type="password" id="dbpassword6" value="<?php echo $stats_server6[3] ?>">
      </p>
    </div>
    <div id="tabs-7">
      <p>
        <label for="dbname7">نام دیتابیس:</label>
        <input name="dbname7" type="text" id="dbname7" value="<?php echo $stats_server7[1] ?>">
      </p>
      <p>
        <label for="perfix7">پیشوند دیتابیس:</label>
        <input name="perfix7" type="text" id="perfix7" value="<?php echo $stats_server7[0] ?>">
      </p>
      <p>
        <label for="dbuser7">نام کاربری دیتابیس:</label>
        <input name="dbuser7" type="text" id="dbuser7" value="<?php echo $stats_server7[2] ?>">
      </p>
      <p>
        <label for="dbpassword7">رمز دیتابیس:</label>
        <input name="dbpassword7" type="password" id="dbpassword7" value="<?php echo $stats_server7[3] ?>">
      </p>
    </div>
    <div id="tabs-8">
      <p>
        <label for="dbname8">نام دیتابیس:</label>
        <input name="dbname8" type="text" id="dbname8" value="<?php echo $stats_server8[1] ?>">
      </p>
      <p>
        <label for="perfix8">پیشوند دیتابیس:</label>
        <input name="perfix8" type="text" id="perfix8" value="<?php echo $stats_server8[0] ?>">
      </p>
      <p>
        <label for="dbuser8">نام کاربری دیتابیس:</label>
        <input name="dbuser8" type="text" id="dbuser8" value="<?php echo $stats_server8[2] ?>">
      </p>
      <p>
        <label for="dbpassword8">رمز دیتابیس:</label>
        <input name="dbpassword8" type="password" id="dbpassword8" value="<?php echo $stats_server8[3] ?>">
      </p>
    </div>
    <div id="tabs-9">
      <p>
        <label for="dbname9">نام دیتابیس:</label>
        <input name="dbname9" type="text" id="dbname9" value="<?php echo $stats_server9[1] ?>">
      </p>
      <p>
        <label for="perfix9">پیشوند دیتابیس:</label>
        <input name="perfix9" type="text" id="perfix9" value="<?php echo $stats_server9[0] ?>">
      </p>
      <p>
        <label for="dbuser9">نام کاربری دیتابیس:</label>
        <input name="dbuser9" type="text" id="dbuser9" value="<?php echo $stats_server9[2] ?>">
      </p>
      <p>
        <label for="dbpassword9">رمز دیتابیس:</label>
        <input name="dbpassword9" type="password" id="dbpassword9" value="<?php echo $stats_server9[3] ?>">
      </p>
    </div>
    <div id="tabs-10">
      <p>
        <label for="dbname10">نام دیتابیس:</label>
        <input name="dbname10" type="text" id="dbname10" value="<?php echo $stats_server10[1] ?>">
      </p>
      <p>
        <label for="perfix10">پیشوند دیتابیس:</label>
        <input name="perfix10" type="text" id="perfix10" value="<?php echo $stats_server10[0] ?>">
      </p>
      <p>
        <label for="dbuser10">نام کاربری دیتابیس:</label>
        <input name="dbuser10" type="text" id="dbuser10" value="<?php echo $stats_server10[2] ?>">
      </p>
      <p>
        <label for="dbpassword10">رمز دیتابیس:</label>
        <input name="dbpassword10" type="password" id="dbpassword10" value="<?php echo $stats_server10[3] ?>">
      </p>
    </div>
  </div>
  <p>
    <input name="submit" type="submit" id="submit" value="ثبت">
    <input type="reset" name="reset" id="reset" value="بازگرداندن فرم به حالت قبلی">
  </p>
</form>
<script type="text/javascript">
$(function() {
	$( "#statistics" ).tabs(); 
});
  </script>
</body>
</html>