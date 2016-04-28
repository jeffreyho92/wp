
  <!--[if lt IE 10]> 
  <script>
  var index_swipers = new Swiper('.index_swipers',{
     pagination: '.index_p',
     paginationClickable: true,
	 speed:15000,
     autoplay : 50000,
     	 loop: true,
     onSlideChangeStart: function(swiper){
$.news_open();
	}	,
    onFirstInit: function(swiper){$.news_open()}	
     	
  })
  
   $('.index_prve').on('click', function(e){
    e.preventDefault()
    index_swipers.swipePrev()
  })
  $('.index_next').on('click', function(e){
    e.preventDefault()
    index_swipers.swipeNext()
  })
  </script>
  <![endif]-->
    <!--[if !IE]><!-->  
	<script>
  var index_swipers = new Swiper('.index_swipers',{
     pagination: '.index_p',
     paginationClickable: true,
	 speed:1000,
     autoplay : 5000,
	 loop: true,
onSlideChangeStart: function(swiper){
$.news_open();
	},
	onFirstInit: function(swiper){$.news_open()}	 
  });
  
   $('.index_prve').on('click', function(e){
    e.preventDefault()
    index_swipers.swipePrev()
  })
  $('.index_next').on('click', function(e){
    e.preventDefault()
    index_swipers.swipeNext()
  })
  </script> <!--<![endif]-->
