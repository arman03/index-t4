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
$news_active = '.$_POST['active'].';
$news_one_name = \''.$_POST['title1'].'\';
$news_one_link = \''.$_POST['link1'].'\';
$news_one_text = \''.$_POST['text1'].'\';
$news_two_name = \''.$_POST['title2'].'\';
$news_two_link = \''.$_POST['link2'].'\';
$news_two_text = \''.$_POST['text2'].'\';
$news_three_name = \''.$_POST['title3'].'\';
$news_three_link = \''.$_POST['link3'].'\';
$news_three_text = \''.$_POST['text3'].'\';
$news_four_name = \''.$_POST['title4'].'\';
$news_four_link = \''.$_POST['link4'].'\';
$news_four_text = \''.$_POST['text4'].'\';
$news_five_name = \''.$_POST['title5'].'\';
$news_five_link = \''.$_POST['link5'].'\';
$news_five_text = \''.$_POST['text5'].'\';
$news_six_name = \''.$_POST['title6'].'\';
$news_six_link = \''.$_POST['link6'].'\';
$news_six_text = \''.$_POST['text6'].'\';
$news_seven_name = \''.$_POST['title7'].'\';
$news_seven_link = \''.$_POST['link7'].'\';
$news_seven_text = \''.$_POST['text7'].'\';
$news_eight_name = \''.$_POST['title8'].'\';
$news_eight_link = \''.$_POST['link8'].'\';
$news_eight_text = \''.$_POST['text8'].'\';
$news_nine_name = \''.$_POST['title9'].'\';
$news_nine_link = \''.$_POST['link9'].'\';
$news_nine_text = \''.$_POST['text9'].'\';
$news_ten_name = \''.$_POST['title10'].'\';
$news_ten_link = \''.$_POST['link10'].'\';
$news_ten_text = \''.$_POST['text10'].'\';
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
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='../'">
</p>
</body>
</html>