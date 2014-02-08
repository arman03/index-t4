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

$myFile = "../../engine/config/servers.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$server_one_name = \''.$_POST['name1'].'\';
$server_one_link = \''.$_POST['link1'].'\';
$server_one_speed = \''.$_POST['speed1'].'\';
$server_one_reward = '.$_POST['prize1'].';
$server_one_version = '.$_POST['version1'].';
$server_one_enable = '.$_POST['active1'].';
$server_two_name = \''.$_POST['name2'].'\';
$server_two_link = \''.$_POST['link2'].'\';
$server_two_speed = \''.$_POST['speed2'].'\';
$server_two_reward = '.$_POST['prize2'].';
$server_two_version = '.$_POST['version2'].';
$server_two_enable = '.$_POST['active2'].';
$server_three_name = \''.$_POST['name3'].'\';
$server_three_link = \''.$_POST['link3'].'\';
$server_three_speed = \''.$_POST['speed3'].'\';
$server_three_reward = '.$_POST['prize3'].';
$server_three_version = '.$_POST['version3'].';
$server_three_enable = '.$_POST['active3'].';
$server_four_name = \''.$_POST['name4'].'\';
$server_four_link = \''.$_POST['link4'].'\';
$server_four_speed = \''.$_POST['speed4'].'\';
$server_four_reward = '.$_POST['prize4'].';
$server_four_version = '.$_POST['version4'].';
$server_four_enable = '.$_POST['active4'].';
$server_five_name = \''.$_POST['name5'].'\';
$server_five_link = \''.$_POST['link5'].'\';
$server_five_speed = \''.$_POST['speed5'].'\';
$server_five_reward = '.$_POST['prize5'].';
$server_five_version = '.$_POST['version5'].';
$server_five_enable = '.$_POST['active5'].';
$server_six_name = \''.$_POST['name6'].'\';
$server_six_link = \''.$_POST['link6'].'\';
$server_six_speed = \''.$_POST['speed6'].'\';
$server_six_reward = '.$_POST['prize6'].';
$server_six_version = '.$_POST['version6'].';
$server_six_enable = '.$_POST['active6'].';
$server_seven_name = \''.$_POST['name7'].'\';
$server_seven_link = \''.$_POST['link7'].'\';
$server_seven_speed = \''.$_POST['speed7'].'\';
$server_seven_reward = '.$_POST['prize7'].';
$server_seven_version = '.$_POST['version7'].';
$server_seven_enable = '.$_POST['active7'].';
$server_eight_name = \''.$_POST['name8'].'\';
$server_eight_link = \''.$_POST['link8'].'\';
$server_eight_speed = \''.$_POST['speed8'].'\';
$server_eight_reward = '.$_POST['prize8'].';
$server_eight_version = '.$_POST['version8'].';
$server_eight_enable = '.$_POST['active8'].';
$server_nine_name = \''.$_POST['name9'].'\';
$server_nine_link = \''.$_POST['link9'].'\';
$server_nine_speed = \''.$_POST['speed9'].'\';
$server_nine_reward = '.$_POST['prize9'].';
$server_nine_version = '.$_POST['version9'].';
$server_nine_enable = '.$_POST['active9'].';
$server_ten_name = \''.$_POST['name10'].'\';
$server_ten_link = \''.$_POST['link10'].'\';
$server_ten_speed = \''.$_POST['speed10'].'\';
$server_ten_reward = '.$_POST['prize10'].';
$server_ten_version = '.$_POST['version10'].';
$server_ten_enable = '.$_POST['active10'].';
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