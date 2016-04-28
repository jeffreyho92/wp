<?php 
   $mytheme_detects=get_option('mytheme_detects');
   $form_title=get_option('mytheme_form_title');
   $form_title2=get_option('mytheme_form_title2'); 
   $mytheme_form_img=get_option('mytheme_form_img');
    ?> 
<div class="post_form">
         <div class="post_form_in">
         
         
        <div id="severs_nav">
        <div class="severs_nav_titile"><img class="post_form_img" src="<?php if($mytheme_form_img){echo $mytheme_form_img;}else{echo get_bloginfo('template_url').'/images/liucheng.png';} ?>" /><p><strong><?php if($form_title){echo $form_title;}else{echo '服务流程';} ?></strong><br /><?php if($form_title2){echo $form_title2;}else{echo 'Process';} ?></p></div>
        <?php  ob_start(); wp_nav_menu(array('walker' => new header_menu(), 'container' => false,'theme_location' => 'drogz-menu','items_wrap' => '<div class="severs_nav_ul">%3$s</div>' ) ); ?>
        </div>
          
          
       
       
       
         </div>
    
    </div>