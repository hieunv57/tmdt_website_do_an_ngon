<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Đăng nhập 
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
                <li><a href="{{asset('dang-nhap')}}"><i class="fa fa-angle-right"></i>Đăng nhập</a></li>
            </ul>
        </div>
    </div>
    <div class="container b-container-login-page">
        <div class="row">
            <div class="col-md-6">
                <div class="b-log-in-form">
                    <div class="f-primary-l f-title-big c-secondary">Đăng nhập</div>
                    <p>Đăng nhập với email và mật khẩu</p>
                    <hr class="b-hr" />
                   @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Lỗi!</strong><br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                    <form action="{{asset('dang-nhap')}}" method="POST" class="form-horizontal" accept-charset="utf-8">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="b-form-row b-form-inline b-form-horizontal">
                            <div class="col-xs-12">
                                <div class="b-form-row">
                                    <label class="b-form-horizontal__label" for="create_account_email">Địa chỉ email</label>
                                    <div class="b-form-horizontal__input">
                                        <input type="text" name="email" required id="create_account_email" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-horizontal__label" for="create_account_password">Mật khẩu</label>
                                    <div class="b-form-horizontal__input">
                                        <input type="password" name="password" required id="create_account_password" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <div class="b-form-horizontal__label"></div>
                                    <label for="contact_form_copy" class="b-contact-form__window-form-row-label">
                                        <input type="checkbox" name="remember" id="contact_form_copy" class="b-form-checkbox" />
                                        <span>Ghi nhớ</span>
                                    </label>
                                </div>
                                <div class="b-form-row">
                                    <div class="b-form-horizontal__label"></div>
                                    <div class="b-form-horizontal__input">
                                        <button type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" >Đăng nhập</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           <div class="col-md-6">
                <div class="f-primary-l f-title-big c-secondary">Đăng nhập với</div>
                <p>Đăng nhập nhanh hơn với các tài khoản mạng xã hội.</p>
                <div class="b-social-links-box">
                
                   <a href="auth/facebook" class="b-social__item f-social__item b-social__item--fb" type="submit"><i class="fa fa-facebook"></i> Facebook</a>
                    
                </div>
                <div class="b-shortcode-example">
                    <ul class="b-list-markers f-list-markers">
                        <li><a href="{{asset('dang-ky')}}"><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> Đăng ký tài khoản mới</a></li>
                        <li><a href="{{asset('lay-lai-mat-khau')}}"><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i>Quên mật khẩu ?</a></li>
                    </ul>
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
<!-- <script src="http://uhchat.net/code.php?f=ac7ac4"></script> -->
</body>
</html>