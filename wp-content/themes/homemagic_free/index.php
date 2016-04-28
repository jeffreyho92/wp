<?php get_header();



?>
<div class="full">

    <div class="index_swipers swiper-container">
         <div class="swiper-wrapper">
	<?php 	
			magichorizon_memcache_sidebar('sidebar-widgets');?>

         </div>
          <div class="pagination index_p"></div>
          <a class="index_next"></a>
          <a class="index_prve"></a>
    </div>
    

</div>
    <?php  
		get_template_part( 'script' ); 
	get_template_part( 'post_from' ); 
	?>
    <div class="content_out">

    <?php magichorizon_memcache_sidebar('index_content');?>
    
  
    </div>



<?php 


 get_footer(); ?>
