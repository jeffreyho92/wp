<?php 
function extraordinaryvision_customize_css(){

	$index_blue=get_option('mytheme_index_blue');
	$buy_color=get_option('mytheme_buy_color');
	$tag_color=get_option('mytheme_tag_color');
	$search_color=get_option('mytheme_search_color');
	$ppc_color=get_option('mytheme_ppc_color');
	$link_color=get_option('mytheme_link_color');
	$textzise_color=get_option('mytheme_textzise_color');
	$textlinehight_color=get_option('mytheme_textlinehight_color');
	$enter_p=get_option('mytheme_enter_p');
	$mytheme_form_color=get_option('mytheme_form_color');
	$mytheme_nav_color=get_option('mytheme_nav_color');
	$mytheme_nav_img=get_option('mytheme_nav_img');
	if($mytheme_nav_img){$mytheme_nav_imgs='url('.$mytheme_nav_img.')';}
	$mytheme_nav_hover=get_option('mytheme_nav_hover');
	$mytheme_nav_title=get_option('mytheme_nav_title');
		$mytheme_nav_title2=get_option('mytheme_nav_title2');
		$mytheme_nav_boder=get_option('mytheme_nav_boder');
		$mytheme_form_pic=get_option('mytheme_form_pic');
	?>
<style id="extraordinaryvision_customize_css" type="text/css">
	 <?php 
	             if($mytheme_form_pic){echo '.post_form{ background:url("'.$mytheme_form_pic.'");}';}
				  if($enter_p=='suojin'){echo '.enter p{text-indent:2em; }';}
				  if($search_color!='#117dc2'){echo '.select,.nav_product_mu li .sub-menu li a:hover{background:'.$search_color.'}';}
				   if($textzise_color!='14'){echo '.enter p{font-size:'.$textzise_color.'px; line-height:'.$textlinehight_color.'px;}';}
				  if($link_color!='#117dc2'){echo '.enter a{color:'.$link_color.'}';}
                  if($ppc_color!='#cccccc'){echo '.enter_cs a.cutyes{background:'.$ppc_color.'}';}
			     if($tag_color!='#117dc2'){echo '.tag_pro a:hover{background:'.$tag_color.'}.infot a#tagss,.infot a{color:'.$tag_color.'}';}
		         if($buy_color!='#117dc2'){echo '#product .buy_btn a.btn{background:'.$buy_color.'}';}
	             if($index_blue!="#ff4800"){echo '#header_pic_nav li p,.header_left .header_tel,.left_lunbo h2 strong, .news_header h2 strong,.caseshow .caseshow_title h2 strong,.news_info ul li:hover b,.news_info ul li:hover em{color:'.$index_blue.' } ';
				echo '#designer .caseshow_titles .qie_designer a.active{border:2px solid '.$index_blue.'}
				.left_lunbo_nav a.active img{border:3px solid '.$index_blue.'}
				.news_tabs a.active, .news .news_header h2, .news .news_header h2 a{background:'.$index_blue.'}
				';
				 }
				 
				 if($mytheme_form_color){echo '.severs_nav_titile p{color:'.$mytheme_form_color.'}';}
				 if(is_user_logged_in()){echo '.header_down_out_fixed{top:32px;}';}
				
				 if($mytheme_nav_color!="#ffffff"||$mytheme_nav_img){echo '.header_down_out{background:'.$mytheme_nav_color.'  '.$mytheme_nav_imgs.';}';}
				 if($mytheme_nav_hover!='#fafafa'){echo '#header_pic_nav li:hover{background:'.$mytheme_nav_hover.';}'; }
				 
				 if($mytheme_nav_title!="#333333"){echo '#header_pic_nav li b{ color:'.$mytheme_nav_title.'}';}
				 if($mytheme_nav_title2!="#ff4800"){echo '#header_pic_nav li p{ color:'.$mytheme_nav_title2.'}';}
				  
				 if($mytheme_nav_boder!='#f4f4f4'){echo '#header_pic_nav li,.header_search_go{border-left:1px solid '.$mytheme_nav_boder.'}.header_menu_ul{border-right:1px solid '.$mytheme_nav_boder.'}.header_search{border-left:1px solid '.$mytheme_nav_boder.';border-right:1px solid '.$mytheme_nav_boder.'}';}
				
				 
	echo stripslashes(get_option('mytheme_zdycss'));
	
	
		
	  ?>
    </style>
<?php }
add_action( 'wp_head', 'extraordinaryvision_customize_css');
?>              