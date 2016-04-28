<?php
function mytheme_header_options($wp_customize){
		$wp_customize->add_section('mytheme_header_options', array(
        'title'    => __('网站顶部设置', 'mytheme'),
        'description' => '通过这个选项设置顶部的样式和内容</br>  <a href="http://www.themepark.com.cn" target="_blank">WEB主题公园开发提供</a>',
        'priority' => 60,
    ));

	class Ari_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {

 ?>
  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value()); ?></textarea>
  </label>
  <p><?php echo esc_html( $this->description); ?></p>
<?php 
  }
}


	class Ari_Customize_fengexian_Control extends WP_Customize_Control {
  public $type = 'fengexian';
  public function render_content() {

 ?>
 <div style="width:100%; background:#333; margin:15px 0; height:1px;"></div>
  
<?php 
  }
}


  $wp_customize->add_setting('mytheme_logo', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_logo', array(
        'label'    => __('logo上传[尺寸高度：78px，宽度不要超过200px]', 'mytheme_logo'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_logo',
     )
    )); 




  $wp_customize->add_setting('mytheme_logo_ad', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_logo_ad', array(
        'label'    => __('logo旁边的广告图片[尺寸高度：78px，宽度不要超过500px]', 'mytheme_logo_ad'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_logo_ad',
     )
    )); 


$wp_customize->add_setting('mytheme_tell', array(
        'default'        => ' ',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_tell', array(
        'label'      => __('电话号码', 'mytheme_tell'),
        'section'    => 'mytheme_header_options',
        'settings'   => 'mytheme_tell',
    ));
	
$wp_customize->add_setting('mytheme_tell2', array(
        'default'        => '24小时联系电话：185 8888 888',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_tell2', array(
        'label'      => __('电话号码2', 'mytheme_tell2'),
        'section'    => 'mytheme_header_options',
        'settings'   => 'mytheme_tell2',
    ));
	
  

	
	 $wp_customize->add_setting('mytheme_ad_top', array(
        'default'        => 'WEB主题公园[www.themepark.com.cn]用心做最好的原创中文WordPress主题!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_ad_top', array(
        'label'      => __('顶部广告词', 'mytheme_ad_top'),
             'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_ad_top',
	
    ));
	
	
	
	
	
	
	 $wp_customize->add_setting('mytheme_form_title', array(
         'default'        => '服务流程',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_form_title', array(
        'label'      => __('服务流程标题（焦点图下）', 'mytheme_form_title'),
             'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_form_title',
	
    ));
	
		
	 $wp_customize->add_setting('mytheme_form_title2', array(
       'default'        => 'Process',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('mytheme_form_title2', array(
        'label'      => __('服务流程副标题（焦点图下）', 'mytheme_form_title2'),
         'section'  => 'mytheme_header_options',
        'settings'   => 'mytheme_form_title2',
		
	
    ));
	
	
  $wp_customize->add_setting('mytheme_form_img', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
         
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_form_img', array(
        'label'    => __('服务流程小图标（png透明图片，演示图标尺寸为110*80，你可以作为参考）', 'mytheme_form_img'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_form_img',
     )
    )); 
		 $wp_customize->add_setting('mytheme_form_color', array(
	    'default'        => '#ff4800',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_form_color', array(
        'label'    => __('服务流程标题颜色', 'extraordinaryvision'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_form_color',
    )));	
		
		
		  $wp_customize->add_setting('mytheme_form_pic', array(
		'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_form_pic', array(
        'label'    => __('服务流程背景图片（平铺显示）', 'mytheme_form_pic'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_form_pic',
     )
    )); 
		
		
		
    $wp_customize->add_setting('mytheme_nav_color', array(
	    'default'        => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_color', array(
        'label'    => __('导航的背景颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_color',
    )));	
   
   	 $wp_customize->add_setting('mytheme_nav_hover', array(
	    'default'        => '#fafafa',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_hover', array(
        'label'    => __('鼠标经过时导航的颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_hover',
    )));
   
   
    $wp_customize->add_setting('mytheme_nav_img', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
         
    ));
      $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mytheme_nav_img', array(
        'label'    => __('导航的背景图片（如果你不想用简单的颜色，可以上传背景图）', 'mytheme_form_img'),
        'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_img',
     )
    )); 
	
	
	 $wp_customize->add_setting('mytheme_nav_title', array(
	    'default'        => '#333',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_title', array(
        'label'    => __('导航的主标题颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_title',
    )));
	
	 $wp_customize->add_setting('mytheme_nav_title2', array(
	    'default'        => '#ff4800',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_title2', array(
        'label'    => __('导航的副题颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_title2',
    )));	
	
		 $wp_customize->add_setting('mytheme_nav_boder', array(
	    'default'        => '#f4f4f4',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mytheme_nav_boder', array(
        'label'    => __('导航描边颜色', 'extraordinaryvision'),
         'section'  => 'mytheme_header_options',
        'settings' => 'mytheme_nav_boder',
    )));
		 
   
};
add_action('customize_register', 'mytheme_header_options');
?>