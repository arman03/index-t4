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
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='../index.php'">
</p>
</body>
</html>