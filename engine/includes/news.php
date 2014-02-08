<div id="news">
  <div id="news-head"></div>
  <div id="news-content">
    <h3 class="news bold">اخبار</h3>
    <br>
    <?php
				$news_counter = 0;
				function news($news_title,$news_text,$news_link){
				if($news_title != '' && $news_text != '' && $news_link != ''){
				global $news_counter;
                if($news_counter>0)echo'<div class="news-divider"></div>';		
				$news_counter++;
				?>
    <div class="news-items"> <span class="bold green"><?php echo $news_title ?></span>
      <div><?php echo $news_text ?><br>
        <br>
      </div>
      <span class="green"> <a target="blank" href="<?php echo $news_link ?>" class="more">اطلاعات بیشتر...</a> </span> </div>
    <?php
				}};
				news($news_one_name,$news_one_text,$news_one_link);
				news($news_two_name,$news_two_text,$news_two_link);
				news($news_three_name,$news_three_text,$news_three_link);
				news($news_four_name,$news_four_text,$news_four_link);
				news($news_five_name,$news_five_text,$news_five_link);
				news($news_six_name,$news_six_text,$news_six_link);
				news($news_seven_name,$news_seven_text,$news_seven_link);
				news($news_eight_name,$news_eight_text,$news_eight_link);
				news($news_nine_name,$news_nine_text,$news_nine_link);
				news($news_ten_name,$news_ten_text,$news_ten_link);
	?>
  </div>
  <div id="news-bottom"> </div>
</div>