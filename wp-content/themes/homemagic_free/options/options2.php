

  <div class="xiaot">
                     <b class="bt">模板微调</b><br />
                    <p>这里你可以设定各个页面、分类目录的显示数量、顶部图片</p>
                 
  </div>
    <div class="xiaot">
                     <b class="bt">内页布局替换</b><br />
                    <p>你可以调换内页布局左右的位置</p>
                      <?php $left_right =get_option('mytheme_left_right') ?>
                    <label  for="left_right ">左右对调:</label>
                  <select name="left_right" id="left_right">
                   <option value=''<?php if ( $left_right ==="" ) {echo "selected='selected'";}?>>默认（右边显示主要内容）</option>
                    <option value='none'<?php if ( $left_right ==="none" ) {echo "selected='selected'";}?>>对调（左边显示主要内容）</option>
	             </select>  
                 
  </div>
            
            <div class="xiaot">
            
            
              
 
             <label  for="fenxiang">文章底部的固定文字、图片以及连接等：</label> 
           
              
              <?php  echo wp_editor(get_option('mytheme_fenxiang'),  "fenxiang"); ?>
              <p>在这里编辑一些图文、链接等信息，可以是您的网站固定推荐信息，他们会显示在每一篇文章的结尾。</p>
              
              
               <label  for="fenxiang2">文章底部的分享代码：</label> 
              
               <textarea name="fenxiang2" cols="86" rows="4" id="fenxiang2"><?php echo stripslashes(get_option('mytheme_fenxiang2')); ?></textarea>    
               
              <p>此处是文章内页和单页的百度分享代码替换框，若你想要使用其他的分享代码，可以获取代码粘贴到此处（如台湾、香港、澳门地区和海外地区用户不需要分享中国大陆的社交网站，可以使用此功能粘贴本地的分享代码，若不想使用此功能，可以打一些空格在里面即可）留空则显示默认的百度分享 </p>  
           
           
           <b class="bt">内页顶部以及底部图片文字设定</b>
            
            <p><strong>内页（分类目录、文章页以及页面）的顶部图片设定</strong></p>
            <div class="up">
            <label  for="top_pic">【pc以及平板电脑端的顶部图片】(尺寸：1920*320)</label> 
              <input type="text" size="60"  name="top_pic" id="top_pic" value="<?php echo get_option('mytheme_top_pic'); ?>"/>   
              <input type="button" name="upload_button" value="上传" id="upbottom"/>  <br /> 
            </div> 
            
             <div class="up">
            <label  for="top_pic_move">【手机端的顶部图片】(尺寸：700*158)</label> 
              <input type="text" size="60"  id="top_pic_move" value="当前主题不可用"readonly="true"/>   
              <input type="button" name="upload_button" value="上传" id="upbottom"/>  <br /> 
               <p class="tishiwenzi">当前主题为免费版，手机端功能不可用，若想要使用手机端功能请了解付费版<a target="_blank" href="http://www.themepark.com.cn/msjywordpressqyzt.html"> 查看付费版详情</a></p> 
            </div>
             
   
            </div>  
             <?php
		    $list_nmber1=get_option('mytheme_list_nmber1');
			$list_nmber2=get_option('mytheme_list_nmber2');
			$list_nmber3=get_option('mytheme_list_nmber3');
			$list_nmber4=get_option('mytheme_list_nmber4');
			$list_nmber5=get_option('mytheme_list_nmber5');
			
			$list_nmber_k1=get_option('mytheme_list_nmber_k1');
			$list_nmber_k2=get_option('mytheme_list_nmber_k2');
			$list_nmber_k3=get_option('mytheme_list_nmber_k3');
			$list_nmber_k4=get_option('mytheme_list_nmber_k4');
			$list_nmber_k5=get_option('mytheme_list_nmber_k5');
			

		    ?>    
                      
              <div class="xiaot">
            <p>显示文章数量自定义，在设定分类目录的列表页现实的数量时，记得要把默认的WordPress数量设为1，否则会出现404错误，设置方法请在 “设置” -- “阅读”中 ，将现实的文章数量设为1，即可。</p>
              <p> <label  for="list_nmber1">纯文字列表模板：</label> 
                <input type="text" size="20" id="list_nmber1" value="当前主题不可用"readonly="true"  /> 
                
                    
              </p>  
              
               <p> <label  for="list_nmber2">默认模板（小图片加上文字）：</label> 
                <input type="text" size="20"  name="list_nmber2" id="list_nmber2" value="<?php if($list_nmber2!=""){echo $list_nmber2;}else{echo '12';}  ?>" />
                
                      
              </p> 
              
               <p> <label  for="list_nmber3">大图文列表：</label> 
                <input type="text" size="20"  value="当前主题不可用"readonly="true"  />  
                 
              </p> 
              
             
              
               <p> <label  for="list_nmber5">图片列表（大图一栏）：</label> 
                <input type="text" size="20" value="当前主题不可用"readonly="true"  />   
                </p>
                  <p class="tishiwenzi">当前主题只有一个默认内页模板，若想要使用更多内页模板可以查看付费版<a target="_blank" href="http://www.themepark.com.cn/msjywordpressqyzt.html"> 查看付费版详情</a></p> 
              
            </div>          
                      
           
            
            
           
                   
                     