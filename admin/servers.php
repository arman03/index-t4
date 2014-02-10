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
   $myFile = "../engine/config/servers.php";
   $fh = fopen($myFile, 'w') or die("can't open file");
   $stringData = '<?php
$server_one_name = \''.$_POST['name1'].'\';
$server_one_link = \''.$_POST['link1'].'\';
$server_one_speed = \''.$_POST['speed1'].'\';
$server_one_reward = '.$_POST['prize1'].';
$server_one_version = '.$_POST['version1'].';
$server_one_enable = '.$_POST['active1'].';
$server_one_register = '.$_POST['register1'].';
$server_two_name = \''.$_POST['name2'].'\';
$server_two_link = \''.$_POST['link2'].'\';
$server_two_speed = \''.$_POST['speed2'].'\';
$server_two_reward = '.$_POST['prize2'].';
$server_two_version = '.$_POST['version2'].';
$server_two_enable = '.$_POST['active2'].';
$server_two_register = '.$_POST['register2'].';
$server_three_name = \''.$_POST['name3'].'\';
$server_three_link = \''.$_POST['link3'].'\';
$server_three_speed = \''.$_POST['speed3'].'\';
$server_three_reward = '.$_POST['prize3'].';
$server_three_version = '.$_POST['version3'].';
$server_three_enable = '.$_POST['active3'].';
$server_three_register = '.$_POST['register3'].';
$server_four_name = \''.$_POST['name4'].'\';
$server_four_link = \''.$_POST['link4'].'\';
$server_four_speed = \''.$_POST['speed4'].'\';
$server_four_reward = '.$_POST['prize4'].';
$server_four_version = '.$_POST['version4'].';
$server_four_enable = '.$_POST['active4'].';
$server_four_register = '.$_POST['register4'].';
$server_five_name = \''.$_POST['name5'].'\';
$server_five_link = \''.$_POST['link5'].'\';
$server_five_speed = \''.$_POST['speed5'].'\';
$server_five_reward = '.$_POST['prize5'].';
$server_five_version = '.$_POST['version5'].';
$server_five_enable = '.$_POST['active5'].';
$server_five_register = '.$_POST['register5'].';
$server_six_name = \''.$_POST['name6'].'\';
$server_six_link = \''.$_POST['link6'].'\';
$server_six_speed = \''.$_POST['speed6'].'\';
$server_six_reward = '.$_POST['prize6'].';
$server_six_version = '.$_POST['version6'].';
$server_six_enable = '.$_POST['active6'].';
$server_six_register = '.$_POST['register6'].';
$server_seven_name = \''.$_POST['name7'].'\';
$server_seven_link = \''.$_POST['link7'].'\';
$server_seven_speed = \''.$_POST['speed7'].'\';
$server_seven_reward = '.$_POST['prize7'].';
$server_seven_version = '.$_POST['version7'].';
$server_seven_enable = '.$_POST['active7'].';
$server_seven_register = '.$_POST['register7'].';
$server_eight_name = \''.$_POST['name8'].'\';
$server_eight_link = \''.$_POST['link8'].'\';
$server_eight_speed = \''.$_POST['speed8'].'\';
$server_eight_reward = '.$_POST['prize8'].';
$server_eight_version = '.$_POST['version8'].';
$server_eight_enable = '.$_POST['active8'].';
$server_eight_register = '.$_POST['register8'].';
$server_nine_name = \''.$_POST['name9'].'\';
$server_nine_link = \''.$_POST['link9'].'\';
$server_nine_speed = \''.$_POST['speed9'].'\';
$server_nine_reward = '.$_POST['prize9'].';
$server_nine_version = '.$_POST['version9'].';
$server_nine_enable = '.$_POST['active9'].';
$server_nine_register = '.$_POST['register9'].';
$server_ten_name = \''.$_POST['name10'].'\';
$server_ten_link = \''.$_POST['link10'].'\';
$server_ten_speed = \''.$_POST['speed10'].'\';
$server_ten_reward = '.$_POST['prize10'].';
$server_ten_version = '.$_POST['version10'].';
$server_ten_enable = '.$_POST['active10'].';
$server_ten_register = '.$_POST['register10'].';
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

include ('../engine/config/servers.php');
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
<h3>سرورها:</h3>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="servers" id="servers">
  <input name="form_name" type="hidden" id="form_name" value="sumbitform">
  <div id="server">
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
      <p>وضعیت:
        <label>
          <input type="radio" name="active1" id="active1" value="true" <?php if($server_one_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active1" id="active1" value="false" <?php if(!$server_one_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name1">نام سرور:</label>
        <input type="text" name="name1" id="name1" value="<?php echo $server_one_name ?>">
      </p>
      <p>
        <label for="link1">لینک:</label>
        <input type="text" name="link1" id="link1" value="<?php echo $server_one_link ?>">
      </p>
      <label for="speed1">سرعت:</label>
      <input type="text" name="speed1" id="speed1" value="<?php echo $server_one_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version1" id="version1" value="3" <?php if($server_one_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version1" id="version1" value="4" <?php if($server_one_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize1" id="prize1" value="true" <?php if($server_one_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize1" id="prize1" value="false" <?php if(!$server_one_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register1" type="radio" id="register1" value="true" <?php if($server_one_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register1" type="radio" id="register1" value="false" <?php if(!$server_one_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-2">
      <p>وضعیت:
        <label>
          <input type="radio" name="active2" id="active2" value="true" <?php if($server_two_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active2" id="active2" value="false" <?php if(!$server_two_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name2">نام سرور:</label>
        <input type="text" name="name2" id="name2" value="<?php echo $server_two_name ?>">
      </p>
      <p>
        <label for="link2">لینک:</label>
        <input type="text" name="link2" id="link2" value="<?php echo $server_two_link ?>">
      </p>
      <label for="speed2">سرعت:</label>
      <input type="text" name="speed2" id="speed2" value="<?php echo $server_two_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version2" id="version2" value="3" <?php if($server_two_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version2" id="version2" value="4" <?php if($server_two_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize2" id="prize2" value="true" <?php if($server_two_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize2" id="prize2" value="false" <?php if(!$server_two_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register2" type="radio" id="register2" value="true" <?php if($server_two_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register2" type="radio" id="register2" value="false" <?php if(!$server_two_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-3">
      <p>وضعیت:
        <label>
          <input type="radio" name="active3" id="active3" value="true" <?php if($server_three_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active3" id="active3" value="false" <?php if(!$server_three_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name3">نام سرور:</label>
        <input type="text" name="name3" id="name3" value="<?php echo $server_three_name ?>">
      </p>
      <p>
        <label for="link3">لینک:</label>
        <input type="text" name="link3" id="link3" value="<?php echo $server_three_link ?>">
      </p>
      <label for="speed3">سرعت:</label>
      <input type="text" name="speed3" id="speed3" value="<?php echo $server_three_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version3" id="version3" value="3" <?php if($server_three_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version3" id="version3" value="4" <?php if($server_three_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize3" id="prize3" value="true" <?php if($server_three_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize3" id="prize3" value="false" <?php if(!$server_three_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register3" type="radio" id="register3" value="true" <?php if($server_three_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register3" type="radio" id="register3" value="false" <?php if(!$server_three_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-4">
      <p>وضعیت:
        <label>
          <input type="radio" name="active4" id="active4" value="true" <?php if($server_four_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active4" id="active4" value="false" <?php if(!$server_four_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name4">نام سرور:</label>
        <input type="text" name="name4" id="name4" value="<?php echo $server_four_name ?>">
      </p>
      <p>
        <label for="link4">لینک:</label>
        <input type="text" name="link4" id="link4" value="<?php echo $server_four_link ?>">
      </p>
      <label for="speed4">سرعت:</label>
      <input type="text" name="speed4" id="speed4" value="<?php echo $server_four_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version4" id="version4" value="3" <?php if($server_four_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version4" id="version4" value="4" <?php if($server_four_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize4" id="prize4" value="true" <?php if($server_four_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize4" id="prize4" value="false" <?php if(!$server_four_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register4" type="radio" id="register4" value="true" <?php if($server_four_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register4" type="radio" id="register4" value="false" <?php if(!$server_four_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-5">
      <p>وضعیت:
        <label>
          <input type="radio" name="active5" id="active5" value="true" <?php if($server_five_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active5" id="active5" value="false" <?php if(!$server_five_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name5">نام سرور:</label>
        <input type="text" name="name5" id="name5" value="<?php echo $server_five_name ?>">
      </p>
      <p>
        <label for="link5">لینک:</label>
        <input type="text" name="link5" id="link5" value="<?php echo $server_five_link ?>">
      </p>
      <label for="speed5">سرعت:</label>
      <input type="text" name="speed5" id="speed5" value="<?php echo $server_five_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version5" id="version5" value="3" <?php if($server_five_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version5" id="version5" value="4" <?php if($server_five_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize5" id="prize5" value="true" <?php if($server_five_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize5" id="prize5" value="false" <?php if(!$server_five_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register5" type="radio" id="register5" value="true" <?php if($server_five_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register5" type="radio" id="register5" value="false" <?php if(!$server_five_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-6">
      <p>وضعیت:
        <label>
          <input type="radio" name="active6" id="active6" value="true" <?php if($server_six_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active6" id="active6" value="false" <?php if(!$server_six_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name6">نام سرور:</label>
        <input type="text" name="name6" id="name6" value="<?php echo $server_six_name ?>">
      </p>
      <p>
        <label for="link6">لینک:</label>
        <input type="text" name="link6" id="link6" value="<?php echo $server_six_link ?>">
      </p>
      <label for="speed6">سرعت:</label>
      <input type="text" name="speed6" id="speed6" value="<?php echo $server_six_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version6" id="version6" value="3" <?php if($server_six_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version6" id="version6" value="4" <?php if($server_six_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize6" id="prize6" value="true" <?php if($server_six_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize6" id="prize6" value="false" <?php if(!$server_six_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register6" type="radio" id="register6" value="true" <?php if($server_six_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register6" type="radio" id="register6" value="false" <?php if(!$server_six_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-7">
      <p>وضعیت:
        <label>
          <input type="radio" name="active7" id="active7" value="true" <?php if($server_seven_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active7" id="active7" value="false" <?php if(!$server_seven_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name7">نام سرور:</label>
        <input type="text" name="name7" id="name7" value="<?php echo $server_seven_name ?>">
      </p>
      <p>
        <label for="link7">لینک:</label>
        <input type="text" name="link7" id="link7" value="<?php echo $server_seven_link ?>">
      </p>
      <label for="speed7">سرعت:</label>
      <input type="text" name="speed7" id="speed7" value="<?php echo $server_seven_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version7" id="version7" value="3" <?php if($server_seven_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version7" id="version7" value="4" <?php if($server_seven_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize7" id="prize7" value="true" <?php if($server_seven_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize7" id="prize7" value="false" <?php if(!$server_seven_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register7" type="radio" id="register7" value="true" <?php if($server_seven_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register7" type="radio" id="register7" value="false" <?php if(!$server_seven_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-8">
      <p>وضعیت:
        <label>
          <input type="radio" name="active8" id="active8" value="true" <?php if($server_eight_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active8" id="active8" value="false" <?php if(!$server_eight_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name8">نام سرور:</label>
        <input type="text" name="name8" id="name8" value="<?php echo $server_eight_name ?>">
      </p>
      <p>
        <label for="link8">لینک:</label>
        <input type="text" name="link8" id="link8" value="<?php echo $server_eight_link ?>">
      </p>
      <label for="speed8">سرعت:</label>
      <input type="text" name="speed8" id="speed8" value="<?php echo $server_eight_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version8" id="version8" value="3" <?php if($server_eight_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version8" id="version8" value="4" <?php if($server_eight_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize8" id="prize8" value="true" <?php if($server_eight_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize8" id="prize8" value="false" <?php if(!$server_eight_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register8" type="radio" id="register8" value="true" <?php if($server_eight_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register8" type="radio" id="register8" value="false" <?php if(!$server_eight_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-9">
      <p>وضعیت:
        <label>
          <input type="radio" name="active9" id="active9" value="true" <?php if($server_nine_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active9" id="active9" value="false" <?php if(!$server_nine_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name9">نام سرور:</label>
        <input type="text" name="name9" id="name9" value="<?php echo $server_nine_name ?>">
      </p>
      <p>
        <label for="link9">لینک:</label>
        <input type="text" name="link9" id="link9" value="<?php echo $server_nine_link ?>">
      </p>
      <label for="speed9">سرعت:</label>
      <input type="text" name="speed9" id="speed9" value="<?php echo $server_nine_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version9" id="version9" value="3" <?php if($server_nine_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version9" id="version9" value="4" <?php if($server_nine_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize9" id="prize9" value="true" <?php if($server_nine_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize9" id="prize9" value="false" <?php if(!$server_nine_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register9" type="radio" id="register9" value="true" <?php if($server_nine_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register9" type="radio" id="register9" value="false" <?php if(!$server_nine_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
    <div id="tabs-10">
      <p>وضعیت:
        <label>
          <input type="radio" name="active10" id="active10" value="true" <?php if($server_ten_enable){ ?> checked <?php } ?>>
          فعال</label>
        <label>
          <input type="radio" name="active10" id="active10" value="false" <?php if(!$server_ten_enable){ ?> checked <?php } ?>>
          غیرفعال</label>
      </p>
      <p>
        <label for="name10">نام سرور:</label>
        <input type="text" name="name10" id="name10" value="<?php echo $server_ten_name ?>">
      </p>
      <p>
        <label for="link10">لینک:</label>
        <input type="text" name="link10" id="link10" value="<?php echo $server_ten_link ?>">
      </p>
      <label for="speed10">سرعت:</label>
      <input type="text" name="speed10" id="speed10" value="<?php echo $server_ten_speed ?>">
      <p>
        <label>ورژن:
          <input type="radio" name="version10" id="version10" value="3" <?php if($server_ten_version == 3){ ?> checked <?php } ?>>
          3</label>
        <label>
          <input type="radio" name="version10" id="version10" value="4" <?php if($server_ten_version == 4){ ?> checked <?php } ?>>
          4</label>
      </p>
      <p>
        <label>جایزه:
          <input type="radio" name="prize10" id="prize10" value="true" <?php if($server_ten_reward){ ?> checked <?php } ?>>
          دارد</label>
        <label>
          <input type="radio" name="prize10" id="prize10" value="false" <?php if(!$server_ten_reward){ ?> checked <?php } ?>>
          ندارد</label>
      </p>
      <p>
        <label>ثبت نام:
          <input name="register10" type="radio" id="register10" value="true" <?php if($server_ten_register){ ?> checked <?php } ?>>
          باز</label>
        <label>
          <input name="register10" type="radio" id="register10" value="false" <?php if(!$server_ten_register){ ?> checked <?php } ?>>
          بسته</label>
      </p>
    </div>
  </div>
  <p>
    <input type="submit" name="submit" id="submit" value="ثبت">
    <input type="reset" name="reset" id="reset" value="بازگرداندن فرم به حالت قبلی">
  </p>
</form>
<script type="text/javascript">
$(function() {
	$( "#server" ).tabs(); 
});
  </script>
</html>