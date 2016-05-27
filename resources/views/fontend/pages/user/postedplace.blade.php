<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Các địa điểm bạn đã đăng
@stop
<body>
<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
@include('fontend.include.header')
<div class="j-menu-container"></div>

<div class="l-main-container">
    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="{{asset('/')}}"><i class="fa fa-home"></i>Trang chủ</a></li>
                <li><a href="{{asset('dang-nhap')}}"><i class="fa fa-angle-right"></i>Quản lý địa điểm, món ăn</a></li>
            </ul>
        </div>
    </div>
    <div class="container b-container-login-page">
        <div class="row">
            <div class="col-md-12">
                <div class="b-log-in-form">
                    <div class="f-primary-l f-title-big c-secondary">Các địa điểm bạn đã đăng</div>
                   
                    <table  class="b-table-primary f-table-primary f-center">
                    
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th >Ảnh</th>
                                <th>Tên Địa Điểm</th>
                                <th>Địa Chỉ</th>
                                <th>Hành động</th>
                              </tr>
                        </thead>
                        <tbody>
                        @foreach($postedplace as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><img src="{{asset('public/backend/images/places/'. $item->image)}}" style="height:90px; width:100px" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                    <a href="{{url('nguoi-dung/xem-dia-diem/'.$item->id)}}">
                                        <button type="button" class="button-xs button-green-bright"><i class="fa fa-edit"></i>&nbsp;
                                            Xem
                                        </button>
                                    </a>
                                    <a href="{{url('nguoi-dung/xoa-dia-diem/'.$item->id)}}" onclick="return confirm('Bạn có chắc chắn xóa địa điểm này ?')">
                                        <button type="button" class="button-xs button-red"><i class="fa fa-trash-o"></i>&nbsp;
                                            Xóa
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <hr>
                     <div class="f-primary-l f-title-big c-secondary">Các món ăn bạn đã đăng</div>
                   
                    <table  class="b-table-primary f-table-primary f-center">
                    
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th >Ảnh</th>
                                <th>Tên món ăn</th>
                                <th>Địa Chỉ</th>
                                <th>Hành động</th>
                              </tr>
                        </thead>
                        <tbody>
                        @foreach($postedfood as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><img src="{{asset('public/backend/images/places/'. $item->image)}}" style="height:90px; width:100px" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                    <a href="{{url('nguoi-dung/xem-dia-diem/'.$item->id)}}">
                                        <button type="button" class="button-xs button-green-bright"><i class="fa fa-edit"></i>&nbsp;
                                            Xem
                                        </button>
                                    </a>
                                    <a href="{{url('nguoi-dung/xoa-dia-diem/'.$item->id)}}" onclick="return confirm('Bạn có chắc chắn xóa món ăn này ?')">
                                        <button type="button" class="button-xs button-red"><i class="fa fa-trash-o"></i>&nbsp;
                                            Xóa
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('fontend.include.footer')
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

</body>
</html>