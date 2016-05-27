<head>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/bxslider/jquery.bxslider.css')}}">
<!-- End bxslider -->
<!-- flexslider -->
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/flexslider/flexslider.css')}}">
<!-- End flexslider -->

<!-- bxslider -->
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/radial-progress/style.css')}}">
<!-- End bxslider -->

<!-- Animate css -->
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/css/animate.css')}}">
<!-- End Animate css -->

<!-- Bootstrap css -->
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/css/bootstrap.min.css')}}">
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/bootstrap-progressbar/bootstrap-progressbar-3.2.0.min.css')}}">
<!-- End Bootstrap css -->

<!-- Jquery UI css -->
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/jqueryui/jquery-ui.css')}}">
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/jqueryui/jquery-ui.structure.css')}}">
<!-- End Jquery UI css -->

<!-- Fancybox -->
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/fancybox/jquery.fancybox.css')}}">
<!-- End Fancybox -->

<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/fonts/fonts.css')}}">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link type="text/css" data-themecolor="default" rel='stylesheet' href="{{asset('public/fontend/css/main-default.css')}}">

<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/rs-plugin/css/settings.css')}}">
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/rs-plugin/css/settings-custom.css')}}">
<link type="text/css" rel='stylesheet' href="{{asset('public/fontend/js/rs-plugin/videojs/video-js.css')}}">

<link href="{{asset('public/rateit/scripts/rateit.css')}}" rel="stylesheet" type="text/css">
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
</head>