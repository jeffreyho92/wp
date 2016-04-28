<?php 

class news_index extends WP_Widget {

	function news_index()
	{
		$widget_ops = array('classname'=>'news_index','description' => get_bloginfo('template_url').'/images/xuanxiang/4.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="news_index",$name='新闻模块【内容排版区模块】',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	    	
	
		 $left_right=esc_attr($instance['left_right']);
		 $first_mod = esc_attr($instance['first_mod']);
		 $my_b_images = esc_attr($instance['my_b_images']);
		 $my_b_images_ad = esc_attr($instance['my_b_images_ad']);
      	 $nnmber = esc_attr($instance['nnmber']); 
		  $nnmber2 = esc_attr($instance['nnmber2']); 
	     $w_cat = esc_attr($instance['w_cat']);
		 $w_cat2 = esc_attr($instance['w_cat2']);
		 $w_cat3 = esc_attr($instance['w_cat3']);
		 $w_cat4 = esc_attr($instance['w_cat4']);
		 $w_cat5 = esc_attr($instance['w_cat5']);
		  $my_text2 = esc_attr($instance['my_text2']);
		 $my_text3 = esc_attr($instance['my_text3']);
		   $my_text5 = esc_attr($instance['my_text4']);
		 $my_text5 = esc_attr($instance['my_text5']);
		  $my_text4 = esc_attr($instance['my_text4']);
		 $vedio  = esc_attr($instance['vedio']);
		  $vedio_img  = esc_attr($instance['vedio_img']);
		 $text_v = esc_attr($instance['text_v']);
	?>
<p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>模块属性设置</strong></p>







 <p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>左侧图片切换模块</strong></p>
<p><strong>标题设置</strong></p>

 <p>
 <label  for="<?php echo $this->get_field_id('my_text2'); ?>">文字模块-标题:</label>
 <input type="text" size="40" value="<?php echo $my_text2 ; ?>" name="<?php echo $this->get_field_name('my_text2'); ?>" id="<?php echo $this->get_field_id('my_text2'); ?>"/>
 </p>
<p>
 <label  for="<?php echo $this->get_field_id('my_text3'); ?>">副标题（英文）:</label>
  

 <input type="text" size="40" value="<?php echo $my_text3 ; ?>" id="<?php echo $this->get_field_id('my_text3'); ?>" name="<?php echo $this->get_field_name('my_text3'); ?>"/>

</p>
 <p>
<label  for="<?php echo $this->get_field_id('w_cat5'); ?>">左侧图片切换模块:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat5'); ?>" name="<?php echo $this->get_field_name('w_cat5'); ?>" >
              <option value=''>请选择</option>
<?php 
		 $categorys = get_categories();
		
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $w_cat5== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>

</p>
 <p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>中部文字模块</strong></p>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">中部文字模块，可选4个分类，至少选择一个分类</em>

<p>
<label  for="<?php echo $this->get_field_id('w_cat'); ?>">选择分类1:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat'); ?>" name="<?php echo $this->get_field_name('w_cat'); ?>" >
              <option value=''>请选择</option>
<?php 
		 $categorys = get_categories();
		$sigk_cat2= $w_cat;
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $sigk_cat2 == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>

</p>


<p>
<label  for="<?php echo $this->get_field_id('w_cat2'); ?>">选择分类2:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat2'); ?>" name="<?php echo $this->get_field_name('w_cat2'); ?>" >
              <option value=''>不显示</option>
<?php 
		 $categorys = get_categories();
		
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $w_cat2== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>

</p>

<p>
<label  for="<?php echo $this->get_field_id('w_cat3'); ?>">选择分类3:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat3'); ?>" name="<?php echo $this->get_field_name('w_cat3'); ?>" >
              <option value=''>不显示</option>
<?php 
		 $categorys = get_categories();
		
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $w_cat3== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>

</p>


<p>
<label  for="<?php echo $this->get_field_id('w_cat4'); ?>">选择分类4:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat4'); ?>" name="<?php echo $this->get_field_name('w_cat4'); ?>" >
              <option value=''>不显示</option>
<?php 
		 $categorys = get_categories();
		
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $w_cat4== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>

</p>

 <p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>右侧视频模块</strong></p>
<p><strong>标题设置</strong></p>

 <p>
 <label  for="<?php echo $this->get_field_id('my_text4'); ?>">文字模块-标题:</label>
 <input type="text" size="40" value="<?php echo $my_text4 ; ?>" name="<?php echo $this->get_field_name('my_text4'); ?>" id="<?php echo $this->get_field_id('my_text4'); ?>"/>
 </p>
<p>
 <label  for="<?php echo $this->get_field_id('my_text5'); ?>">副标题（英文）:</label>
  

 <input type="text" size="40" value="<?php echo $my_text5 ; ?>" id="<?php echo $this->get_field_id('my_text5'); ?>" name="<?php echo $this->get_field_name('my_text5'); ?>"/>

</p>
 <p>
 <label  for="<?php echo $this->get_field_id('vedio'); ?>">视频或者其他html代码:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('vedio'); ?>" name="<?php echo $this->get_field_name('vedio'); ?>"cols="52" rows="4" ><?php echo stripslashes($vedio); ?></textarea>  

</p>

 <p>
 <label  for="<?php echo $this->get_field_id('text_v'); ?>">视频下方的文字:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('text_v'); ?>" name="<?php echo $this->get_field_name('text_v'); ?>"cols="52" rows="4" ><?php echo stripslashes($text_v); ?></textarea>  
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;"><?php esc_attr_e('使用代码 <br />进行分行,也支持html代码');?></em>
</p>



<p>
  <label  for="<?php echo $this->get_field_id('my_vedio_img'); ?>">封面图片:</label><br />
 <input type="text" size="40" value="<?php echo $vedio_img ; ?>" name="<?php echo $this->get_field_name('my_vedio_img'); ?>" id="<?php echo $this->get_field_id('my_vedio_img'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">请上传一张图片，尺寸为367*214，他将会作为一张视频的封面图片显示，你可以不放置视频，这个区域就以图文方式显示了</em>
</p> 




<?php    wp_enqueue_media(); ?>
 <script language="javascript">jQuery(document).ready(function(){var b;var a;jQuery(".left_right_upload_button").on("click",function(c){a=jQuery(this).prev("input");b=wp.media({title:"选择图片",button:{text:"选择"},multiple:false});if(b){b.open()}b.on("select",function(){attachment=b.state().get("selection").first().toJSON();jQuery(a).val(attachment.url);jQuery(".supports-drag-drop").remove()})})});</script>   
	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
	     $id =$instance['id'];
        $before_content = $instance['before_content'];
        $after_content = $instance['after_content'];
		$left_right = apply_filters('widget_title', empty($instance['left_right']) ? __('') : $instance['left_right']);
		$first_mod = apply_filters('widget_title', empty($instance['first_mod']) ? __('') : $instance['first_mod']);
		 $my_b_images  = apply_filters('widget_title', empty($instance['my_b_images']) ? __('') : $instance['my_b_images']);
        $my_b_images_ad  = apply_filters('widget_title', empty($instance['my_b_images_ad']) ? __('') : $instance['my_b_images_ad']);
	  $my_text2  = apply_filters('widget_title', empty($instance['my_text2']) ? __('') : $instance['my_text2']);
		$my_text3  = apply_filters('widget_title', empty($instance['my_text3']) ? __('') : $instance['my_text3']);
		
		$my_text4  = apply_filters('widget_title', empty($instance['my_text4']) ? __('') : $instance['my_text4']);
		$my_text5 = apply_filters('widget_title', empty($instance['my_text5']) ? __('') : $instance['my_text5']);
	    $w_cat = apply_filters('widget_title', empty($instance['w_cat']) ? __('') : $instance['w_cat']);
		 $w_cat2 = apply_filters('widget_title', empty($instance['w_cat2']) ? __('') : $instance['w_cat2']);
		  $w_cat3= apply_filters('widget_title', empty($instance['w_cat3']) ? __('') : $instance['w_cat3']);
		   $w_cat4 = apply_filters('widget_title', empty($instance['w_cat4']) ? __('') : $instance['w_cat4']);
		    $w_cat5 = apply_filters('widget_title', empty($instance['w_cat5']) ? __('') : $instance['w_cat5']);
			  $vedio = apply_filters('widget_title', empty($instance['vedio']) ? __('') : $instance['vedio']);
		 $text_v  = apply_filters('widget_title', empty($instance['text_v']) ? __('') : $instance['text_v']);
	$nnmber = apply_filters('widget_title', empty($instance['nnmber']) ? __('6') : $instance['nnmber']);
	$nnmber2 = apply_filters('widget_title', empty($instance['nnmber2']) ? __('7') : $instance['nnmber2']);
	$vedio_img = apply_filters('widget_title', empty($instance['vedio_img']) ? __('') : $instance['vedio_img']);
	
	 $args = array( 'cat' => $w_cat , 'showposts' => $nnmber , 'post__in' =>$post__in );     $query = new WP_Query( $args );  
	  $args2 = array( 'cat' => $w_cat2 , 'showposts' => $nnmber , 'post__in' =>$post__in );     $query2 = new WP_Query( $args2 ); 
	   $args3= array( 'cat' => $w_cat3 , 'showposts' => $nnmber , 'post__in' =>$post__in );     $query3 = new WP_Query( $args3 ); 
	    $args4 = array( 'cat' => $w_cat4 , 'showposts' => $nnmber , 'post__in' =>$post__in );     $query4 = new WP_Query( $args4 ); 
		  $args5 = array( 'cat' => $w_cat5 , 'showposts' => 5 , 'post__in' =>$post__in );     $query5 = new WP_Query( $args5 ); 
	
   
 ?> 




<div  class="news_tuoch"> 

<div class="left_lunbo">
  <a class="caseshow_title" href="<?php echo get_category_link($w_cat); ?>" target="_blank" >
        <?php if($my_text2){ ?> <h2> <?php echo $my_text3; ?><strong><?php echo $my_text2; ?></h2></strong><?php } ?>
       
      
       </a>
<div class="swiper-container left_lunbo_out" id="left_lunbo_out_<?php echo $w_cat5; ?>">
   <div class="swiper-wrapper">
      <?php   while ( $query5->have_posts() ) :$query5->the_post();
	   $tit= get_the_title();
		                          $id =get_the_ID(); 
	                             
	  ?>  
             <div class="swiper-slide news_lunbo">
             
                       <a target="_blank"href="<?php the_permalink() ?>"><?php  if (has_post_thumbnail()) { the_post_thumbnail('news' ,array('alt'	=>$tit, 'title'=> $tit ));} ?>
                       
                       <strong>   <?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,35,"..."); ?></strong>
                       </a>
             </div>
             
           <?php  endwhile; ?>
   </div>
     </div>
   <div class="left_lunbo_nav">
         <?php  $ashu_i=0; while ( $query5->have_posts() ) :$query5->the_post(); $ashu_i++; ?>  
             <a title="<?php echo $tit; ?>" <?php if( $ashu_i==1){echo ' class="active"';}?>><?php  if (has_post_thumbnail()) { the_post_thumbnail('news' ,array('alt'	=>$tit, 'title'=> $tit ));} ?> </a>
             
           <?php  endwhile; ?>
   
   
   </div>
   
 


</div>
 <script>
 
  
   var left_lunbo_out = new Swiper('#left_lunbo_out_<?php echo $w_cat5; ?>',{
    speed:600,
	autoplay : 2000,

    onSlideChangeStart: function(){
      $("#left_lunbo_out_<?php echo $w_cat5; ?> ").next(".left_lunbo_nav").children(".active").removeClass('active')
      $("#left_lunbo_out_<?php echo $w_cat5; ?> ").next(".left_lunbo_nav").children("a").eq(left_lunbo_out.activeIndex).addClass('active')  
    }
  });
  $("#left_lunbo_out_<?php echo $w_cat5; ?>").next(".left_lunbo_nav").children("a").on('touchstart mousedown',function(e){
    e.preventDefault()
    $("#left_lunbo_out_<?php echo $w_cat5; ?> ").next(".left_lunbo_nav").children(" .active").removeClass('active')
    $(this).addClass('active');
	left_lunbo_out.stopAutoplay();
	
     left_lunbo_out.swipeTo( $(this).index() ,1000, false );
  });
  $("#left_lunbo_out_<?php echo $w_cat5; ?> ").next(".left_lunbo_nav").children("a").click(function(e){
    e.preventDefault()
  });

  </script>

                 <div class="swiper-slide_in news" id="news<?php echo $w_cat ?>">
                    
                       <div class="left_news">
                             <div class="news_tabs">
                                <?php if($w_cat){ ?><a class="active"><?php echo get_cat_name($w_cat) ;?></a><?php } ?>
                                <?php if($w_cat2){ ?><a><?php echo get_cat_name($w_cat2) ;?></a><?php } ?>
                                <?php if($w_cat3){ ?><a><?php echo get_cat_name($w_cat3) ;?></a><?php } ?>
                                <?php if($w_cat4){ ?><a><?php echo get_cat_name($w_cat4) ;?></a><?php } ?>
                               
                             </div>
                             <div class="swiper-container news_info">
                                 
                               
                               
                                 <div class="swiper-wrapper">
                                    
                                 
                                   <ul class="swiper-slide">
                                   
                                 <?php  $ashu_i=0; while ( $query->have_posts() ) :$query->the_post(); $ashu_i++; ?>  
                                     <?php 
								  $tit= get_the_title();
		                          $id =get_the_ID(); 
	                              $content= get_the_content();
								    if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
								?>   
                                   
                                     
                                     
                                     
                                 
                                     <li>
                                    
                                     <b><?php echo '0'.$ashu_i; ?></b>
                                   
                                     
                                     <a href="<?php the_permalink() ?>" target="_blank" > <strong><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,35,"..."); ?>   </strong>
                                  
                                     <em><?php echo get_the_time('Y-m-d') ; ?></em>
                                     </a>
                                     </li>
                                    <?php endwhile; ?>
                                    
                                   </ul>
                                
                                
                                   <ul class="swiper-slide">
                                   
                                 <?php  $ashu_i=0; while ( $query2->have_posts() ) :$query2->the_post(); $ashu_i++; ?>  
                                     <?php 
								  $tit= get_the_title();
		                          $id =get_the_ID(); 
	                              $content= get_the_content();
								    if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
									
                                     ?>
                                    
                                    
                                     <li>
                                    
                                     <b><?php echo '0'.$ashu_i; ?></b>
                                   
                                     
                                     <a href="<?php the_permalink() ?>" target="_blank" > <strong><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,35,"..."); ?>   </strong>
                                  
                                     <em><?php echo get_the_time('Y-m-d') ; ?></em>
                                     </a>
                                     </li>
                                    <?php endwhile; ?>
                                   </ul>
                                
                                 
                                    <ul class="swiper-slide">
                                   
                                 <?php  $ashu_i=0; while ( $query3->have_posts() ) :$query3->the_post(); $ashu_i++; ?>  
                                     <?php 
								  $tit= get_the_title();
		                          $id =get_the_ID(); 
	                              $content= get_the_content();
								    if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
									 ?>     
                                   
                                     
                                     
                                     
                                 
                                    
                                     <li>
                                    
                                     <b><?php echo '0'.$ashu_i; ?></b>
                                   
                                     
                                     <a href="<?php the_permalink() ?>" target="_blank" > <strong><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,35,"..."); ?>   </strong>
                                  
                                     <em><?php echo get_the_time('Y-m-d') ; ?></em>
                                     </a>
                                     </li>
                                    <?php  endwhile; ?>
                                   </ul>
                                
                                 
                                 
                                    <ul class="swiper-slide">
                                   
                                 <?php  $ashu_i=0; while ( $query4->have_posts() ) :$query4->the_post(); $ashu_i++; ?>  
                                     <?php 
								  $tit= get_the_title();
		                          $id =get_the_ID(); 
	                              $content= get_the_content();
								    if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
									?>     
                               
                                 
                                     
                                     
                                     
                                  
                                     <li>
                                    
                                     <b><?php echo '0'.$ashu_i; ?></b>
                                   
                                     
                                     <a href="<?php the_permalink() ?>" target="_blank" > <strong><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,35,"..."); ?>   </strong>
                                  
                                     <em><?php echo get_the_time('Y-m-d') ; ?></em>
                                     </a>
                                     </li>
                                    <?php  endwhile; ?>
                                   </ul>
                                
                               
                                 </div>
                                 
                                 
                                 
                                 
                             </div>
                       
                       </div>
                     
                  
               </div>

 <script>
  var news_info = new Swiper('#news<?php echo $w_cat ?> .news_info',{
    speed:600,
	mode : 'vertical',
	simulateTouch : false,
	calculateHeight : true,
    onSlideChangeStart: function(){
      $("#news<?php echo $w_cat ?> .news_tabs .active").removeClass('active')
      $("#news<?php echo $w_cat ?> .news_tabs a").eq(news_info.activeIndex).addClass('active')  
    }
  });
  $("#news<?php echo $w_cat ?> .news_tabs a").on('touchstart mousedown',function(e){
    e.preventDefault()
    $("#news<?php echo $w_cat ?> .news_tabs .active").removeClass('active')
    $(this).addClass('active');
	
     news_info.swipeTo( $(this).index() ,1000, false );
  });
  $("#news<?php echo $w_cat ?> .news_tabs a").click(function(e){
    e.preventDefault()
  });
  </script>
  
  
  
  
  <div class="right_news">
  
       <div class="news_header"> <a class="caseshow_title" href="<?php echo get_category_link($w_cat); ?>" target="_blank" >
        <?php if($my_text4){ ?> <h2> <?php echo $my_text4; ?><strong><?php echo $my_text4; ?></h2></strong><?php } ?>
       
      
       </a> </div>
      

           <div class="vedio_news">
          <?php echo html_entity_decode($vedio); ?>
          <?php if($vedio_img){ echo '<img src="'.$vedio_img.'" alt="'.$my_text4.'" />';}else{echo '<img src="'.get_bloginfo('template_url').'/images/vedio.jpg" />';} ; ?> 
           
           </div>
         <p>
          <?php echo html_entity_decode($text_v);?>
</p>
  
  
  
  
       </div>
                 
              </div>
 
        <?php
	}
}
register_widget('news_index');
?>