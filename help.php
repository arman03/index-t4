<?php
/**
 * @In the name of God!
 * @author: Siavash Bamshadnia (amtr)
 * @email: sbamtr@gmail.com
 */
?>
<?php
if(!file_exists('engine/config/admin.php')){
	include('engine/includes/offline.php');
	exit;
}
else {
	include ('engine/config.php');
}
if (!$active) {
	include('engine/includes/offline.php');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" slick-uniqueid="3">
<head>
<meta name="author" content="Siavash Bamshadnia (amtr)">
<meta name="keywords" lang="fa" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $description ?>">
<title><?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="gpack/main_default/lang/ir/compact.css">
<meta name="content-language" content="ir">
<meta http-equiv="imagetoolbar" content="no">
<script type="text/javascript" src="crypt.js?<?php echo time().'';?>"></script>
<?php echo $header ?>
</head>
<body class="gecko">
<div id="backgroundLeft"></div>
<div id="backgroundRight"></div>
<div id="background_frame">
  <div id="navigation-wrapper">
    <div id="navigation-container">
      <div id="country_select"> </div>
      <div id="top-nav">
        <div id="top-nav-menu">
          <div id="logo"> <a href="./"><img src="img/x.gif" class="logo" alt=""></a> </div>
          <ul id="top-navigation">
            <li> <a href="index.php#tutorial">تور بازی</a> </li>
            <?php if($forum_link != ''){ ?>
            <li> <a target="_blank" href="<?php echo $forum_link ?>" id="forum">فروم</a> </li>
            <?php } ?>
            <li> <a id="registerLink" href="index.php#register">ثبت نام</a> </li>
          </ul>
        </div>
        <div id="top-nav-login">
          <div id="login">
            <div class="btn-green">
              <div class="btn-green-l"></div>
              <div class="btn-green-c"> <a class="npage" href="index.php#serverLogin">ورود</a> </div>
              <div class="btn-green-r"></div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="content-container">
    <div id="content-menu">
      <?php
	if ($stats_servers != 0){
		include ('engine/includes/stats.php');?>
      <div id="statistics">
        <div id="stat-top"></div>
        <div id="stat_bottom"></div>
        <h3 class="stat bold grey">آمار بازیکنان </h3>
        <div>
          <div class="stat type">مجموع بازیکنان:</div>
          <div class="stat value"><?php echo $total;?></div>
          <div class="clear"></div>
          <div class="stat type">بازیکنان فعال:</div>
          <div class="stat value"><?php echo $total_active;?></div>
          <div class="clear"></div>
          <div class="stat type">بازیکنان آنلاین:</div>
          <div class="stat value"><?php echo $total_online;?></div>
          <div class="clear"></div>
        </div>
      </div>
      <?php }
				if ($news_active) 
					include ('engine/includes/news.php');
				if ($confirmation != '')
				{ ?>
      <div id="gameRating">
        <div id="gameRatingHead"></div>
        <div id="gameRatingContent"> <?php echo $confirmation; ?> </div>
        <div id="gameRatingBottom"></div>
      </div>
      <?php } ?>
    </div>
    <div id="content-main">
      <div id="wit">
        <div id="gold-top"> </div>
        <div id="gold">
          <div id="frame-content">
            <?php
			if(!isset($_GET['s']))
				$_GET['s'] = "";
			if ($_GET['s'] == "")
				include("engine/help/1.php");
			if ($_GET['s'] == "2")
				include("engine/help/2.php");
			?>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="footer-container">
    <div id="footer"> <a class="flink" href="help.php">پشتیبانی</a>&nbsp;|&nbsp; <a target="_blank" class="flink" href="http://t4.answers.travian.ir">سوالات متداول</a>&nbsp;|&nbsp; <a class="flink" href="index.php#links">لینک‌ها</a>&nbsp;|&nbsp; <a class="flink" href="index.php#screenshots" id="screenshotp">صحنه‌های بازی</a>&nbsp;|&nbsp; <a class="flink" href="index.php#spielregeln">قوانین بازی</a>&nbsp;|&nbsp; <a class="flink" href="index.php#agb">شروط</a>&nbsp;|&nbsp; <a class="flink" href="index.php#impressum">یادداشت</a> &nbsp;|&nbsp;<a class="flink" href="http://www.traviangames.com/en/company/marketing/affiliate-partners.html" target="_blank">برنامه‌ی وابسته</a> <br/>
    </div>
  </div>
  <div id="overlaybg"></div>
</div>
</body>
</html>