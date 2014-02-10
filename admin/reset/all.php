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

$myFile = "../../engine/config/confirmation.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$confirmation = \'\';
$esra = false;
?>';
fwrite($fh, $stringData);
fclose($fh);

$myFile = "../../engine/config/info.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$title = \'TRAVIANB\';
$description = \'\';
$keywords = \'\';
$forum_link = \'\';
$header = \'\';
$footer = \'\';
$active = true;
$offline_message = \'<p>سایت به منظور به روزرسانی تا اطلاع ثانوی غیرفعال می باشد، لطفا بعدا مراجعه فرمایید.</p>

<p>مدیر سایت</p>\';
?>';
fwrite($fh, $stringData);
fclose($fh);

$myFile = "../../engine/config/news.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$news_active = false;
$news_one_name = \'\';
$news_one_link = \'\';
$news_one_text = \'\';
$news_two_name = \'\';
$news_two_link = \'\';
$news_two_text = \'\';
$news_three_name = \'\';
$news_three_link = \'\';
$news_three_text = \'\';
$news_four_name = \'\';
$news_four_link = \'\';
$news_four_text = \'\';
$news_five_name = \'\';
$news_five_link = \'\';
$news_five_text = \'\';
$news_six_name = \'\';
$news_six_link = \'\';
$news_six_text = \'\';
$news_seven_name = \'\';
$news_seven_link = \'\';
$news_seven_text = \'\';
$news_eight_name = \'\';
$news_eight_link = \'\';
$news_eight_text = \'\';
$news_nine_name = \'\';
$news_nine_link = \'\';
$news_nine_text = \'\';
$news_ten_name = \'\';
$news_ten_link = \'\';
$news_ten_text = \'\';
?>';
fwrite($fh, $stringData);
fclose($fh);

$myFile = "../../engine/config/servers.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$server_one_name = \'\';
$server_one_link = \'\';
$server_one_speed = \'\';
$server_one_reward = false;
$server_one_version = 3;
$server_one_enable = false;
$server_one_register = false;
$server_two_name = \'\';
$server_two_link = \'\';
$server_two_speed = \'\';
$server_two_reward = false;
$server_two_version = 3;
$server_two_enable = false;
$server_two_register = false;
$server_three_name = \'\';
$server_three_link = \'\';
$server_three_speed = \'\';
$server_three_reward = false;
$server_three_version = 3;
$server_three_enable = false;
$server_three_register = false;
$server_four_name = \'\';
$server_four_link = \'\';
$server_four_speed = \'\';
$server_four_reward = false;
$server_four_version = 3;
$server_four_enable = false;
$server_four_register = false;
$server_five_name = \'\';
$server_five_link = \'\';
$server_five_speed = \'\';
$server_five_reward = false;
$server_five_version = 3;
$server_five_enable = false;
$server_five_register = false;
$server_six_name = \'\';
$server_six_link = \'\';
$server_six_speed = \'\';
$server_six_reward = false;
$server_six_version = 3;
$server_six_enable = false;
$server_six_register = false;
$server_seven_name = \'\';
$server_seven_link = \'\';
$server_seven_speed = \'\';
$server_seven_reward = false;
$server_seven_version = 3;
$server_seven_enable = false;
$server_seven_register = false;
$server_eight_name = \'\';
$server_eight_link = \'\';
$server_eight_speed = \'\';
$server_eight_reward = false;
$server_eight_version = 3;
$server_eight_enable = false;
$server_eight_register = false;
$server_nine_name = \'\';
$server_nine_link = \'\';
$server_nine_speed = \'\';
$server_nine_reward = false;
$server_nine_version = 3;
$server_nine_enable = false;
$server_nine_register = false;
$server_ten_name = \'\';
$server_ten_link = \'\';
$server_ten_speed = \'\';
$server_ten_reward = false;
$server_ten_version = 3;
$server_ten_enable = false;
$server_ten_register = false;
?>';
fwrite($fh, $stringData);
fclose($fh);

$myFile = "../../engine/config/stats.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$mysql_server = \'\';
$stats_servers = 0;
$stats_server1 = array(\'\',\'\',\'\',\'\');
$stats_server2 = array(\'\',\'\',\'\',\'\');
$stats_server3 = array(\'\',\'\',\'\',\'\');
$stats_server4 = array(\'\',\'\',\'\',\'\');
$stats_server5 = array(\'\',\'\',\'\',\'\');
$stats_server6 = array(\'\',\'\',\'\',\'\');
$stats_server7 = array(\'\',\'\',\'\',\'\');
$stats_server8 = array(\'\',\'\',\'\',\'\');
$stats_server9 = array(\'\',\'\',\'\',\'\');
$stats_server10 = array(\'\',\'\',\'\',\'\');
?>';
fwrite($fh, $stringData);
fclose($fh);

include('done.php');
?>