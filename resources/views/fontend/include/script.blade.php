<script src="{{asset('public/fontend/js/breakpoints.js')}}"></script>
<script src="{{asset('public/fontend/js/jquery/jquery-1.11.1.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('public/fontend/js/scrollspy.js')}}"></script>
<script src="{{asset('public/fontend/js/bootstrap-progressbar/bootstrap-progressbar.js')}}"></script>
<script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
<!-- end bootstrap -->
<script src="{{asset('public/fontend/js/masonry.pkgd.min.js')}}"></script>
<script src='js/imagesloaded.pkgd.min.js'></script>
<!-- bxslider -->
<script src="{{asset('public/fontend/js/bxslider/jquery.bxslider.min.js')}}"></script>
<!-- end bxslider -->
<!-- flexslider -->
<script src="{{asset('public/fontend/js/flexslider/jquery.flexslider.js')}}"></script>
<!-- end flexslider -->
<!-- smooth-scroll -->
<script src="{{asset('public/fontend/js/smooth-scroll/SmoothScroll.js')}}"></script>
<!-- end smooth-scroll -->
<!-- carousel -->
<script src="{{asset('public/fontend/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
<!-- end carousel -->
<script src="{{asset('public/fontend/js/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('public/fontend/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('public/fontend/js/rs-plugin/videojs/video.js')}}"></script>

<!-- jquery ui -->
<script src="{{asset('public/fontend/js/jqueryui/jquery-ui.js')}}"></script>
<!-- end jquery ui -->
<script type="text/javascript" language="javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
<!-- Modules -->
<script src="{{asset('public/fontend/js/modules/sliders.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/ui.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/retina.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/animate-numbers.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/parallax-effect.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/settings.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/maps-google.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/color-themes.js')}}"></script>
<!-- End Modules -->

<!-- Audio player -->
<script type="text/javascript" src="{{asset('public/fontend/js/audioplayer/js/jquery.jplayer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/fontend/js/audioplayer/js/jplayer.playlist.min.js')}}"></script>
<script src="{{asset('public/fontend/js/audioplayer.js')}}"></script>
<!-- end Audio player -->

<!-- radial Progress -->
<script src="{{asset('public/fontend/js/radial-progress/jquery.easing.1.3.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js')}}"></script>
<script src="{{asset('public/fontend/js/radial-progress/radialProgress.js')}}"></script>
<script src="{{asset('public/fontend/js/progressbars.js')}}"></script>
<!-- end Progress -->

<!-- Google services -->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script src="{{asset('public/fontend/js/google-chart.js')}}"></script>
<!-- end Google services -->
<script src="{{asset('public/fontend/js/j.placeholder.js')}}"></script>

<!-- Fancybox -->
<script src="{{asset('public/fontend/js/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('public/fontend/js/fancybox/jquery.mousewheel.pack.js')}}"></script>
<script src="{{asset('public/fontend/js/fancybox/jquery.fancybox.custom.js')}}"></script>
<!-- End Fancybox -->
<script src="{{asset('public/fontend/js/user.js')}}"></script>
<script src="{{asset('public/fontend/js/timeline.js')}}"></script>
<script src="{{asset('public/fontend/js/fontawesome-markers.js')}}"></script>
<script src="{{asset('public/fontend/js/markerwithlabel.js')}}"></script>
<script src="{{asset('public/fontend/js/cookie.js')}}"></script>
<script src="{{asset('public/fontend/js/loader.js')}}"></script>
<script src="{{asset('public/fontend/js/scrollIt/scrollIt.min.js')}}"></script>
<script src="{{asset('public/fontend/js/modules/navigation-slide.js')}}"></script>
<script src="http://uhchat.net/code.php?f=ac7ac4"></script>
<script type="text/javascript">
	function time() {
	   var today = new Date();
	   var weekday=new Array(7);
	   weekday[0]="Chủ Nhật";
	   weekday[1]="Thứ 2";
	   weekday[2]="Thứ 3";
	   weekday[3]="Thứ 4";
	   weekday[4]="Thứ 5";
	   weekday[5]="Thứ 6";
	   weekday[6]="Thứ 7";
	   var day = weekday[today.getDay()]; 
	   var dd = today.getDate();
	   var mm = today.getMonth()+1; //January is 0!
	   var yyyy = today.getFullYear();
	   var h=today.getHours();
	   var m=today.getMinutes();
	   var s=today.getSeconds();
	   m=checkTime(m);
	   s=checkTime(s);
	   nowTime = h+":"+m+":"+s;
	   if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;
	 
	   tmp='<span class="date">'+today+' | '+nowTime+'</span>';
	 
	   document.getElementById("clock").innerHTML=tmp;
	 
	   clocktime=setTimeout("time()","1000","JavaScript");
	   function checkTime(i)
	   {
	      if(i<10){
		 i="0" + i;
	      }
	      return i;
	   }
	}
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '619938278162217',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>