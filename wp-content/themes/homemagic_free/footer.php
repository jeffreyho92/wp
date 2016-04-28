<?php

 $footer_b=get_option('mytheme_footer_b');
if($footer_b){ $footer_bs='style="background:url('.$footer_b.')"';}
 $footer_d=get_option('mytheme_footer_d');
if($footer_d){ $footer_ds='style="background:url('.$footer_d.')"';}
$word_t2=get_option('mytheme_word_t2');
         $themepark= get_option('mytheme_themepark');
         $icp_b=get_option('mytheme_icp_b');
		
 ?>
<div class="footer"<?php echo $footer_bs;?>>
 
 <div class="footer_in">
 <?php if(get_option('mytheme_footer_box1_title')){?>
 <div id="footer_in_box" class="footer_in_box demor">
    <b><?php echo get_option('mytheme_footer_box1_title') ?></b>
      <?php  ob_start(); wp_nav_menu(array( 'theme_location'  => "footer-menu" ,'menu_class'=> 'footer_in_link','container' => false  ) ); ?>
   
 </div>
 <?php } ?>
 <?php if(get_option('mytheme_footer_box2_title')){?>
  <div id="footer_in_box" class="footer_in_box demor">
    <b><?php echo get_option('mytheme_footer_box2_title') ?></b>
   <a target="_blank" href="<?php echo get_option('mytheme_footer_box2_link') ?>" class="about_pic"><img src="<?php echo get_option('mytheme_footer_box2_pic');?>"  alt="<?php echo get_option('mytheme_footer_box2_title') ?>"/></a>
   <p class="about_text"><?php echo get_option('mytheme_footer_box2_text') ?></p>
   
  </div>
   <?php } ?>
    <?php if(get_option('mytheme_footer_box3_title')){?>
  <div id="footer_in_box" class="footer_in_box demor">
    <b><?php echo get_option('mytheme_footer_box3_title') ?></b>
   <a target="_blank" href="<?php echo get_option('mytheme_footer_box3_link') ?>" class="about_pic"><img src="<?php echo get_option('mytheme_footer_box3_pic');?>"  alt="<?php echo get_option('mytheme_footer_box3_title') ?>"/></a>
   <p class="about_text"><?php echo get_option('mytheme_footer_box3_text') ?></p>
   
  </div>
   <?php } ?>
   
 </div>
 <div class="footer_bottom" <?php echo $footer_ds;?>>
     <div  id="footer_bottom_link" class="footer_in">
       <?php  if(is_home()){ob_start(); wp_nav_menu(array( 'theme_location'  => "link-menu2" ,'menu_class'=> 'footer_bottom_link','container' => false  ) );} ?>
      
     
     <p> <?php  if($word_t2!=""){echo $word_t2;}else{echo '版权所有';}  ?> &copy;<?php echo date("Y"); echo " "; bloginfo('name'); 
		   if($icp_b !=="") {echo ' |   <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">'.$icp_b.'</a>'; };
		   if($themepark =="") {echo ' |  技术支持： <a target="_blank" href="http://www.themepark.com.cn">WEB主题公园</a>'; }
		   else if($themepark =="en") {echo ' |  Theme by ： <a target="_blank" href="http://www.themepark.com.cn">themepark</a>'; }
		    echo ' |  '.stripslashes(get_option('mytheme_analytics')); ?> </p>
     </div>

</div>
</div>


	<?php get_template_part( 'kefu' );  wp_footer(); ?>

</html>
