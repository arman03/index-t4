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
   $myFile = "../engine/config/news.php";
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
  <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='index.php'">
</p>
</body>
</html>
<?php
exit; }

include ('../engine/config/news.php');
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<script src="ckeditor/ckeditor.js"></script>
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
<h3>اخبار:</h3>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="news" id="news">
<input name="form_name" type="hidden" id="form_name" value="sumbitform">
  <p>
    <label>
      وضعیت : 
      <input type="radio" name="active" value="true" id="active" <?php if($news_active){ ?> checked <?php } ?>>
      فعال</label>
    <label>
      <input type="radio" name="active" value="false" id="active" <?php if(!$news_active){ ?> checked <?php } ?>>
      غیرفعال</label>
  </p>
  <div id="newsbox">
    <ul>
      <li><a href="#tabs-1">جعبه خبر 1</a></li>
      <li><a href="#tabs-2">جعبه خبر 2 </a></li>
      <li><a href="#tabs-3">جعبه خبر 3</a></li>
      <li><a href="#tabs-4">جعبه خبر 4</a></li>
      <li><a href="#tabs-5">جعبه خبر 5</a></li>
      <li><a href="#tabs-6">جعبه خبر 6</a></li>
      <li><a href="#tabs-7">جعبه خبر 7</a></li>
      <li><a href="#tabs-8">جعبه خبر 8</a></li>
      <li><a href="#tabs-9">جعبه خبر 9</a></li>
      <li><a href="#tabs-10">جعبه خبر 10</a></li>
    </ul>
    <div id="tabs-1">
      <p>
        <label for="title1">عنوان:</label>
        <input name="title1" type="text" id="title1" value="<?php echo $news_one_name ?>">
      </p>
      <p>
        <label for="link1">لینک:</label>
        <input name="link1" type="text" id="link1" value="<?php echo $news_one_link ?>">
      </p>
      <p>
        <label for="text1">متن:</label>
        <textarea class="ckeditor" name="text1" id="text1"><?php echo $news_one_text ?></textarea>
      </p>
    </div>
    <div id="tabs-2">
      <p>
        <label for="title2">عنوان:</label>
        <input name="title2" type="text" id="title2" value="<?php echo $news_two_name ?>">
      </p>
      <p>
        <label for="link2">لینک:</label>
        <input name="link2" type="text" id="link2" value="<?php echo $news_two_link ?>">
      </p>
      <p>
        <label for="text2">متن:</label>
        <textarea class="ckeditor" name="text2" id="text2"><?php echo $news_two_text ?></textarea>
      </p>
    </div>
    <div id="tabs-3">
      <p>
        <label for="title3">عنوان:</label>
        <input name="title3" type="text" id="title3" value="<?php echo $news_three_name ?>">
      </p>
      <p>
        <label for="link3">لینک:</label>
        <input name="link3" type="text" id="link3" value="<?php echo $news_three_link ?>">
      </p>
      <p>
        <label for="text3">متن:</label>
        <textarea class="ckeditor" name="text3" id="text3"><?php echo $news_three_text ?></textarea>
      </p>
    </div>
    <div id="tabs-4">
      <p>
        <label for="title4">عنوان:</label>
        <input name="title4" type="text" id="title4" value="<?php echo $news_four_name ?>">
      </p>
      <p>
        <label for="link4">لینک:</label>
        <input name="link4" type="text" id="link4" value="<?php echo $news_four_link ?>">
      </p>
      <p>
        <label for="text4">متن:</label>
        <textarea class="ckeditor" name="text4" id="text4"><?php echo $news_four_text ?></textarea>
      </p>
    </div>
    <div id="tabs-5">
      <p>
        <label for="title5">عنوان:</label>
        <input name="title5" type="text" id="title5" value="<?php echo $news_five_name ?>">
      </p>
      <p>
        <label for="link5">لینک:</label>
        <input name="link5" type="text" id="link5" value="<?php echo $news_five_link ?>">
      </p>
      <p>
        <label for="text5">متن:</label>
        <textarea class="ckeditor" name="text5" id="text5"><?php echo $news_five_text ?></textarea>
      </p>
    </div>
    <div id="tabs-6">
      <p>
        <label for="title6">عنوان:</label>
        <input name="title6" type="text" id="title6" value="<?php echo $news_six_name ?>">
      </p>
      <p>
        <label for="link6">لینک:</label>
        <input name="link6" type="text" id="link6" value="<?php echo $news_six_link ?>">
      </p>
      <p>
        <label for="text6">متن:</label>
        <textarea class="ckeditor" name="text6" id="text6"><?php echo $news_six_text ?></textarea>
      </p>
    </div>
    <div id="tabs-7">
      <p>
        <label for="title7">عنوان:</label>
        <input name="title7" type="text" id="title7" value="<?php echo $news_seven_name ?>">
      </p>
      <p>
        <label for="link7">لینک:</label>
        <input name="link7" type="text" id="link7" value="<?php echo $news_seven_link ?>">
      </p>
      <p>
        <label for="text7">متن:</label>
        <textarea class="ckeditor" name="text7" id="text7"><?php echo $news_seven_text ?></textarea>
      </p>
    </div>
    <div id="tabs-8">
      <p>
        <label for="title8">عنوان:</label>
        <input name="title8" type="text" id="title8" value="<?php echo $news_eight_name ?>">
      </p>
      <p>
        <label for="link8">لینک:</label>
        <input name="link8" type="text" id="link8" value="<?php echo $news_eight_link ?>">
      </p>
      <p>
        <label for="text8">متن:</label>
        <textarea class="ckeditor" name="text8" id="text8"><?php echo $news_eight_text ?></textarea>
      </p>
    </div>
    <div id="tabs-9">
      <p>
        <label for="title9">عنوان:</label>
        <input name="title9" type="text" id="title9" value="<?php echo $news_nine_name ?>">
      </p>
      <p>
        <label for="link9">لینک:</label>
        <input name="link9" type="text" id="link9" value="<?php echo $news_nine_link ?>">
      </p>
      <p>
        <label for="text9">متن:</label>
        <textarea class="ckeditor" name="text9" id="text9"><?php echo $news_nine_text ?></textarea>
      </p>
    </div>
    <div id="tabs-10">
      <p>
        <label for="title10">عنوان:</label>
        <input name="title10" type="text" id="title10" value="<?php echo $news_ten_name ?>">
      </p>
      <p>
        <label for="link10">لینک:</label>
        <input name="link10" type="text" id="link10" value="<?php echo $news_ten_link ?>">
      </p>
      <p>
        <label for="text10">متن:</label>
        <textarea class="ckeditor" name="text10" id="text10"><?php echo $news_ten_text ?></textarea>
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
	$( "#newsbox" ).tabs(); 
});
  </script>
</body>
</html>