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
date_default_timezone_set('Asia/Tehran');
?>
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
<body class="webkit chrome">
<div id="backgroundLeft"></div>
<div id="backgroundRight"></div>
<div id="background">
  <div id="navigation-wrapper">
    <div id="navigation-container">
      <div id="country_select"> </div>
      <div id="top-nav">
        <div id="top-nav-menu">
          <div id="logo"> <a href=""><img src="img/x.gif" class="logo" alt=""></a> </div>
          <ul id="top-navigation">
            <li> <a href="#tutorial" class="popcon">تور بازی</a> </li>
            <?php if($forum_link != ''){ ?>
            <li> <a target="_blank" href="<?php echo $forum_link ?>" id="forum">فروم</a> </li>
            <?php } ?>
            <li> <a id="registerLink" class="popcon" href="#register">ثبت نام</a> </li>
          </ul>
        </div>
        <div id="top-nav-login">
          <div id="login">
            <div class="btn-green">
              <div class="btn-green-l"></div>
              <div class="btn-green-c"> <a class="npage popcon" href="#serverLogin">ورود</a> </div>
              <div class="btn-green-r"></div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="stimeContainer">
        <div id="stime" class="stime">
          <div class="content-background-l">&nbsp;</div>
          <div class="content-background-r">&nbsp;</div>
          <div class="content"> <span class="icn">زمان سرور</span>&nbsp; <span id="tp1"><?php echo date("H:i:s") ?></span> (GMT +03:30) </div>
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
      <?php
				}
				if ($news_active) 
					include ('engine/includes/news.php');
				if ($confirmation != '')
				{
				?>
      <div id="gameRating">
        <div id="gameRatingHead"></div>
        <div id="gameRatingContent"> <?php echo $confirmation; ?> </div>
        <div id="gameRatingBottom"></div>
      </div>
      <?php
				}
				?>
    </div>
    <div id="content-main">
      <div id="wit">
        <div id="wit-top"></div>
        <div id="wit-content" class="with-button">
          <div id="hero"></div>
          <h1 class="wit bold">TRAVIAN - بازی استراتژیک آنلاین</h1>
          <div class="wit-info"> TRAVIAN یکی از محبوب‌ترین بازی‌های آنلاین جهان است. به عنوان یک بازیکن در TRAVIAN شما قادر به ساخت امپراطوری خود، تربیت لشکری عظیم و جنگ به همراه متحدهای خود می‌باشید.
            <div class="playnow playnow-button">
              <div class="playnow-start">
                <h1 class="play white bold"><a id="register" class="popcon play" href="#register" title="به صورت رایگان ثبت نام کنید!">به صورت رایگان ثبت نام کنید!</a></h1>
              </div>
              <div class="playnow-end"></div>
              <div class="clear"></div>
            </div>
          </div>
          <div id="stage_space"></div>
          <div id="stage">
            <div id="frame">
              <div class="stage-content stage-content0" style="background-image: url(img/tvbox/big/1_rtl.png)">
                <div style="position:absolute; right:15px; top:170px;"><img alt="" class="bbArrow" src="img/x.gif"> <span style="color:black;"><span style="font-weight:bold;">هم اکنون TRAVIAN 4 بازی کنید</span></span></div>
                <div style="position:absolute; right:15px; top:12px;">
                  <h3>جدیدترین سرور بازی</h3>
                  <br>
                  <br>
                  <span style="font-weight:bold;">در جدیدترین سرور بازی ثبت نام کنید<br>
                  و از امتیازهای یکی از بازیکن‌های<br>
                  اول بودن لذت ببرید.</span></div>
                <div class="stage-arrow stage-arrow-0"></div>
              </div>
              <div class="stage-content stage-content1 shown" style="background-image: url(img/tvbox/big/2_rtl.png)">
                <div style="position:absolute; right:15px; top:170px;"><img alt="" class="bbArrow" src="img/x.gif"> <span style="color:black;"><span style="font-weight:bold;">TRAVIAN 4 جدید را کاوش کنید</span></span></div>
                <div style="position:absolute; right:15px; top:12px;">
                  <h3>TRAVIAN 4 جدید</h3>
                  <br>
                  <br>
                  <span style="font-weight:bold;">با سیستم قهرمان جدید<br>
                  گرافیک کاملاً جدید<br>
                  و سیستم نقشه‌ی قدرتمند!</span></div>
                <div class="stage-arrow stage-arrow-1"></div>
              </div>
              <div class="stage-content stage-content2 " style="background-image: url(img/tvbox/big/3_rtl.png)">
                <div style="position:absolute; right:15px; top:170px;"><img alt="" class="bbArrow" src="img/x.gif"> <span style="color:black;"><span style="font-weight:bold;">هم اکنون عضو انجمن ما شوید!</span></span></div>
                <div style="position:absolute; right:15px; top:12px;">
                  <h3>انجمن</h3>
                  <br>
                  <br>
                  <span style="font-weight:bold;">عضو یکی از بزرگترین<br>
                  انجمن بازی در جهان شوید.</span></div>
                <div class="stage-arrow stage-arrow-2"></div>
              </div>
              <div id="stage-nav">
                <ul id="buttons">
                  <li class="b0 act0" style="background-image: url(img/tvbox/small/1_rtl.png)">&nbsp;</li>
                  <li class="b1" style="background-image: url(img/tvbox/small/2_rtl.png)">&nbsp;</li>
                  <li class="b2" style="background-image: url(img/tvbox/small/3_rtl.png)">&nbsp;</li>
                </ul>
              </div>
            </div>
            <div id="stage-bg" style="visibility: hidden; opacity: 0; "></div>
            <div id="stage-fg">
              <div class="stage-links"> <a class="stage-link stage-link1 " href="serverRegister.php" style="visibility: visible; opacity: 1; "></a> <a class="stage-link stage-link2 shown" href="serverRegister.php" style="visibility: visible; opacity: 1; "></a> <a class="stage-link stage-link3 " href="<?php echo $forum_link ?>" style="visibility: visible; opacity: 1; "></a> </div>
              <div id="stage-nav-click">
                <ul id="buttons-click">
                  <li class="b0 " style="visibility: visible; opacity: 1; ">&nbsp;</li>
                  <li class="b1 act1" style="visibility: visible; opacity: 1; ">&nbsp;</li>
                  <li class="b2 " style="visibility: visible; opacity: 1; ">&nbsp;</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="wit-bottom"></div>
      </div>
      <div id="moreabttravian">
        <div id="find-out-more">
          <div id="strip-head">
            <div>یادگیری بیشتر <br>
              در مورد TRAVIAN!</div>
          </div>
          <div id="strip">
            <ul id="strips">
              <li class="stip0">&nbsp;</li>
              <li class="stip1">&nbsp;</li>
              <li class="stip2">&nbsp;</li>
              <li class="stip3">&nbsp;</li>
              <li class="stip4">&nbsp;</li>
              <li class="stip5">&nbsp;</li>
            </ul>
          </div>
          <div id="strip-details">
            <div class="details">
              <div class="details-top"></div>
              <div class="details-l-top"></div>
              <div class="details-r-top"></div>
              <div class="details-body">
                <div class="details-body-l" id="strip-c1"></div>
                <div class="details-body-r">مزارع و معادن خود را ارتقاء دهید تا تولید منابع شما افزایش یابد. برای ساخت و یا ارتقاء ساختمان و تربیت لشکر شما به منابع نیاز خواهید داشت. <br>
                  <br>
                  <div class="btn-green">
                    <div class="btn-green-l"></div>
                    <div class="btn-green-c"><a class="npage popcon" href="#tutorial">تور بازی</a></div>
                    <div class="btn-green-r"></div>
                  </div>
                </div>
              </div>
              <div class="details-l-bottom"></div>
              <div class="details-r-bottom"></div>
              <div class="details-bottom"></div>
            </div>
            <div class="details">
              <div class="details-top"></div>
              <div class="details-l-top"></div>
              <div class="details-r-top"></div>
              <div class="details-body">
                <div class="details-body-l" id="strip-c2"></div>
                <div class="details-body-r">ساختمان‌های دهکده‌ی خود را ساخته و سطح آنها را ارتقاء دهید. ساختمان‌ها باعث بهبود زیر ساخت‌های کلی دهکده‌ی شما، افزایش تولید منابع شده و به شما اجازه‌ی تحقیق، تربیت و ارتقاء لشکریان دهکده را خواهد داد. <br>
                  <br>
                  <div class="btn-green">
                    <div class="btn-green-l"></div>
                    <div class="btn-green-c"><a class="npage popcon" href="#tutorial">تور بازی</a></div>
                    <div class="btn-green-r"></div>
                  </div>
                </div>
              </div>
              <div class="details-l-bottom"></div>
              <div class="details-r-bottom"></div>
              <div class="details-bottom"></div>
            </div>
            <div class="details">
              <div class="details-top"></div>
              <div class="details-l-top"></div>
              <div class="details-r-top"></div>
              <div class="details-body">
                <div class="details-body-l" id="strip-c3"></div>
                <div class="details-body-r">مناطق و دهکده‌های اطراف خود را نگاه کنید. شما قادر به پیدا کردن دوست‌ها و یا دشمن‌های جدید می‌باشید. از آبادی‌های اطراف دهکده‌ی خود استفاده کرده و شاهد رشد امپراطوری خود باشید. <br>
                  <br>
                  <div class="btn-green">
                    <div class="btn-green-l"></div>
                    <div class="btn-green-c"><a class="npage popcon" href="#tutorial">تور بازی</a></div>
                    <div class="btn-green-r"></div>
                  </div>
                </div>
              </div>
              <div class="details-l-bottom"></div>
              <div class="details-r-bottom"></div>
              <div class="details-bottom"></div>
            </div>
            <div class="details">
              <div class="details-top"></div>
              <div class="details-l-top"></div>
              <div class="details-r-top"></div>
              <div class="details-body">
                <div class="details-body-l" id="strip-c4"></div>
                <div class="details-body-r">خود را با بازیکن‌های دیگر مقایسه کرده و پیشرفت و موفقیت خود را بسنجید. به رتبه‌های تاپ 10 نگاه کنید و برای دریافت مدال‌های هفتگی بکوشید. <br>
                  <br>
                  <div class="btn-green">
                    <div class="btn-green-l"></div>
                    <div class="btn-green-c"><a class="npage popcon" href="#tutorial">تور بازی</a></div>
                    <div class="btn-green-r"></div>
                  </div>
                </div>
              </div>
              <div class="details-l-bottom"></div>
              <div class="details-r-bottom"></div>
              <div class="details-bottom"></div>
            </div>
            <div class="details">
              <div class="details-top"></div>
              <div class="details-l-top"></div>
              <div class="details-r-top"></div>
              <div class="details-body">
                <div class="details-body-l" id="strip-c5"></div>
                <div class="details-body-r">در مورد ماجراجویی‌ها، تجارت‌ها و جنگ‌های خود گزارش‌هایی با جزیئیات دقیق دریافت کنید و کنترل گزارش‌های در حال اتفاق در اطراف دهکده‌ی خود را فراموش نکنید. <br>
                  <br>
                  <div class="btn-green">
                    <div class="btn-green-l"></div>
                    <div class="btn-green-c"><a class="npage popcon" href="#tutorial">تور بازی</a></div>
                    <div class="btn-green-r"></div>
                  </div>
                </div>
              </div>
              <div class="details-l-bottom"></div>
              <div class="details-r-bottom"></div>
              <div class="details-bottom"></div>
            </div>
            <div class="details">
              <div class="details-top"></div>
              <div class="details-l-top"></div>
              <div class="details-r-top"></div>
              <div class="details-body">
                <div class="details-body-l" id="strip-c6"></div>
                <div class="details-body-r">با بازیکن‌های دیگر مبادله‌ی اطلاعات کرده و روابط دیپلماتیک برقرار کنید. همیشه به یاد داشته باشید که برقراری رابطه بهترین راه برای پیدا کردن دوست‌های جدید و رفع مشکلات گذشته می‌باشد. <br>
                  <br>
                  <div class="btn-green">
                    <div class="btn-green-l"></div>
                    <div class="btn-green-c"><a class="npage popcon" href="#tutorial">تور بازی</a></div>
                    <div class="btn-green-r"></div>
                  </div>
                </div>
              </div>
              <div class="details-l-bottom"></div>
              <div class="details-r-bottom"></div>
              <div class="details-bottom"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="ssc-bg">
        <div id="ss-head">
          <div id="ss-head-left"></div>
          <div id="ss-head-right"></div>
          <h3 class="ss bold white">صحنه‌های بازی</h3>
        </div>
        <div id="ss-container">
          <div id="g-widget"> <a class="browse next disabled"></a>
            <div id="gallery">
              <div id="g-items" style="width: 1568px; "> <img src="img/x.gif" class="screen1" alt=""> <img src="img/x.gif" class="screen2" alt=""> <img src="img/x.gif" class="screen3" alt=""> <img src="img/x.gif" class="screen4" alt=""> <img src="img/x.gif" class="screen5" alt=""> <img src="img/x.gif" class="screen6" alt=""> <img src="img/x.gif" class="screen7" alt=""> <img src="img/x.gif" class="screen8" alt=""> </div>
            </div>
            <a class="browse prev"></a> </div>
        </div>
      </div>
      <script type="text/javascript">
	window.addEvent('domready', function()
	{
	    //stage
	    var stagewidget = new stageWidget({
	        stagebg:$('stage-bg'),
	        stageduration: {
	            0:5000,
	            1:5000,
	            2:5000	        },
	        stagecon:$$(".stage-content"),
	        stagenav:$$("#buttons-click li"),
	        stagelink:$$(".stage-link")
	    });

	    //tooltip
	    var tooltipwidget = new tooltipWidget({
	        tips: $$("#strips li"),
	        details:$$(".details")
	    });
	    //slider
	    var sliderwidget = new sliderWidget({
	        container: $$('#g-widget'),
	        pimgwidth:520,
	        head:$('prev_head'),
	        desc:$('prev_desc'),
	        prev_bg:$('overlaybg'),
	        prev_container:$('preview_container'),
	        prev_stage_container:$$('#preview_stage'),
	        prev_items:$('preview_items'),
	        close:$('close')
	    });

	    //slideshow [footer]
	    $('screenshotp').addEvents(
	    {
	    	'click': function(e) {
	    		e.stop();
	    		this.fireEvent('show');
	    	},
	    	'show':function(e){
		        new sliderWidget({
		            container: $$('#g-widget'),
		            preview: false,
		            inpreview:true,
		            pimgwidth:520,
		            head:$('prev_head'),
		            desc:$('prev_desc'),
		            prev_bg:$('overlaybg'),
		            prev_container:$('preview_container'),
		            prev_stage_container:$$('#preview_stage'),
		            prev_items:$('preview_items'),
		            close:$('close'),
		            directcall:true
		        });

		    }
	    });

	    //popup anchor
	    var url = new URI();
	    var anchor = url.get('fragment');
	    if (anchor && anchor == 'screenshots')
	    {
	    	$('screenshotp').fireEvent('show');
	    }
	});
</script> </div>
    <div class="clear"></div>
  </div>
  <div id="footer-container">
    <div id="footer"> <a class="flink" href="help.php">پشتیبانی</a>&nbsp;|&nbsp; <a target="_blank" class="flink" href="http://t4.answers.travian.ir">سوالات متداول</a>&nbsp;|&nbsp; <a class="flink popcon" href="#links">لینک‌ها</a>&nbsp;|&nbsp; <a class="flink" href="#screenshots" id="screenshotp">صحنه‌های بازی</a>&nbsp;|&nbsp; <a class="flink popcon" href="#spielregeln">قوانین بازی</a>&nbsp;|&nbsp; <a class="flink popcon" href="#agb">شروط</a>&nbsp;|&nbsp; <a class="flink popcon" href="#impressum">یادداشت</a> &nbsp;|&nbsp;<a class="flink" href="http://www.traviangames.com/en/company/marketing/affiliate-partners.html" target="_blank">برنامه‌ی وابسته</a> <br/>
    </div>
  </div>
  <div id="preview_container">
    <div id="p-top"></div>
    <div id="p-bg"></div>
    <div id="p-bottom"></div>
    <a class="close"></a>
    <div id="p-content">
      <div id="prev_head">
        <h3>صحنه‌های بازی</h3>
      </div>
      <div id="preview_stage"> <a class="browse next"></a>
        <div id="preview_img">
          <div id="preview_items"></div>
        </div>
        <a class="browse prev"></a>
        <div class="clear"></div>
      </div>
      <div id="prev_desc"></div>
    </div>
  </div>
  <div id="popup">
    <div id="popup-top"><a class="pclose"></a></div>
    <div id="popup-content">
      <div class="loading"></div>
    </div>
    <div id="popup-bottom"></div>
  </div>
  <div id="overlaybg"></div>
  <script type="text/javascript">
	            var screenshots = [
	                {'img':'screenBig screenBig1','hl':'مرکز دهکده', 'desc':'روزی دهکده‌ی شما می‌تواند مانند این شود و نقطه‌ی شروعی برای \r\nامپراطوری بزرگ شما باشد.'},
	                {'img':'screenBig screenBig2','hl':'دید‌کلی دهکده', 'desc':'چوب، خشت، آهن و گندم منابع حیاتی می‌باشند که با استفاده از \r\nآنها می‌توانید اقتصاد خود را بهتر کرده و غذای اهالی دهکده‌ی \r\nخود را تامین کنید؛ این منابع برای ساخت ساختمان و حتی در جنگ \r\nنیز لازم می‌باشد. با این منابع باارزش قادر به تربیت لشکری بزرگ \r\nمی‌باشید.'},
	                {'img':'screenBig screenBig3','hl':'قهرمان', 'desc':'می‌توانید قهرمان خود را به ماجراجویی‌های خطرناکی ارسال کنید. \r\nاگر قهرمان شما موفق باشد امکان دارد اجناس باارزشی پیدا کرده \r\nو با خود به دهکده بیارد.'},
	                {'img':'screenBig screenBig4','hl':'اطلاعات ساختمان', 'desc':'برای اینکه دهکده‌ی قدرتمندی با تولیدی بالایی داشته باشید \r\nباید در آن ساختمان‌های زیادی بنا کنید. در ابتدا هنگام انتخاب \r\nساختمانی که می‌خواهید قبل از بقیه بنا کنید، دقت کنید زیرا \r\nمنابع بسیار کمی دارید.'},
	                {'img':'screenBig screenBig5','hl':'محدوده‌ی اطراف', 'desc':'برای آشنایی با همسایگان خود، محدوده‌ی اطراف خود را کاوش کنید؛ \r\nشما می‌توانید مسیر صلح را انتخاب کرده و برای خود اتحاد درست \r\nکنید و با دیگران متحد شوید و یا با جنگ سرزمین‌های اطراف خود \r\nرا تسخیر کنید. شاید در اطراف دهکده‌ی شما آبادی‌های غنی موجود \r\nباشد، آنها را تسخیر کنید تا تولیدی منابع شما افزایش یابد، \r\nاما مواظب حیوانات وحشی موجود در آنها باشید.'},
	                {'img':'screenBig screenBig6','hl':'گزارش نبرد', 'desc':'بهتر است در همان ابتدای کار به فکر تربیت لشکر باشید، تا قادر \r\nبه دفاع از خود و حمله به دیگران باشید. از این روش شما قادر \r\nبه غارت بیشتر منابع و ساخت سریع‌تر امپراطوری خود خواهید بود.'},
	                {'img':'screenBig screenBig7','hl':'سیستم مدال‌ها', 'desc':'در آخر هر هفته 10 بازیکن و اتحاد برتر در رده‌های متفاوتی \r\nانتخاب می‌شوند؛ آنها مدالی به عنوان جایزه برای اینکار خود \r\nدریافت خواهند کرد.'},
	                {'img':'screenBig screenBig8','hl':'سیستم وظایف', 'desc':'برای راهنمایی شما در ابتدای بازی ما کاردان را برای شما ارسال \r\nکرده‌ایم؛ برای ساخت دهکده‌ی خود او شما را راهنمایی خواهد کرد. \r\nفقط کافی است روی عکس وی در سمت راست کلیک کنید.'}
	            ];
	            initCounter();
  </script> 
</div>
<?php echo $footer ?>
</body>
</html>