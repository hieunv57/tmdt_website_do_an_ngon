<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
@extends('fontend.include.head')
@section('title')
    Food5 - {{$place_detail->name}}
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
                    <li><i class="fa fa-angle-right"></i><a href="#">{{$place_detail->name}}</a></li>
                    
                </ul>
            </div>
        </div>
        <section class="b-infoblock">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ">
                        <div class="b-shortcode-example">
                            <div class=" f-primary-b b-title-b-hr f-title-b-hr b-null-top-indent">{{$place_detail->name}}</div>
                            <div class="b-product-card b-default-top-indent">
                                <div class="b-product-card__visual-wrap">
                                    <div class="flexslider b-product-card__visual flexslider-zoom">
                                        <ul class="slides">
                                            <li>
                                                <img src="{{asset('public/backend/images/places/'. $place_detail->image)}}" />
                                            </li>
                                            @foreach($image as $item_image)
                                            <li>
                                                <img src="{{asset('public/backend/images/places/'. $item_image->image)}}" />
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
<!--                                     <div class="flexslider flexslider-thumbnail b-product-card__visual-thumb carousel-sm">
                                        <ul class="slides">
                                            <li>
                                                <img src="img/shop/shop_1_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_2_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_3_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_4_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_3_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_4_sm.png" />
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="b-product-card__info">
                                    <h4 class="f-primary-b b-h4-special f-h4-special">Thông tin</h4>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Địa chỉ</div>
                                        <span class="f-product-card__info_price c-default f-primary-b">{{$place_detail->address}}</span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Giá từ</div>
                                        <span class="f-product-card__info_price c-default f-primary-b">{{$place_detail->price}}</span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Đánh giá</div>
                                        <div class="b-stars-group f-stars-group b-margin-right-standard">
                                           <div id="rateit_star1"  data-productid="{{$place_detail->id}}"></div>
                                        </div>
                                        <span class="f-primary-b c-tertiary f-title-smallest"> <a href="#">({{$place_detail->avg_point}} trung bình)</a></span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Yêu thích</div>
                                        <div class="b-product-card__info_like  b-btn f-btn b-btn-sm-md f-btn-sm-md b-btn--icon-only">
                                        <a href="{{asset('them-vao-yeu-thich/'.$place_detail->id)}}"><i class="fa fa-heart"></i></a>
                                           
                                        </div>
                                        <span class="f-primary-b c-tertiary f-title-smallest"> <a href="#">({{$place_detail->total_wishlist}})</a></span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Danh mục</div>
                                        <a class="f-more f-title-smallest" href="">{{$place_detail->category_name}}</a>
                                    </div>
                                    <div class="fb-like" data-href="{{asset('dia-diem/'.$place_detail->link)}}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="b-shortcode-example">
                            <div class="b-tabs f-tabs j-tabs b-tabs-reset">
                                <ul>
                                    <li><a href="#tabs-21">Thông tin chi tiết</a></li>
                                    <li><a href="#tabs-22">Bình luận</a></li>
                                </ul>
                                <div class="b-tabs__content">
                                    <div id="tabs-21">
                                        <h4 class="f-tabs-vertical__title f-primary-b">Thông tin chi tiết địa điểm</h4>
                                        <p>
                                            <?php 
                                                echo $place_detail->description;
                                            ?>
                                        </p>
                                        
                                    </div>
                                    <div id="tabs-22">

                                        <div class="b-comment-blog-box" id="comment">
                                            <div class="b-comments-box">
                                                <div class="b-comment__title f-comment__title">
                                                    <span class="b-comment__title__name f-primary-b"><!-- 32 Comments --></span>

                                                </div>
                                                <div class="b-comment__list">
                                                    <ul>
                                                    @foreach($cmt as $item)
                                                        <li>
                                                            <div class="b-comment-item">
                                                                <div class="b-comment__img">
                                                                    <img data-retina src="img/users/comment_img.jpg" alt="">
                                                                </div>
                                                                <div class="b-comment__descr">
                                                                    <div class="b-comment__descr__data">
                                                                        <div class="b-comment__descr__name f-comment__descr__name f-primary-b">{{$item->user_name}}</div>
                                                                        <div class="b-comment__descr__info f-comment__descr__info">
                                                                            <span class="f-comment__date">{{$item->created_at}}</span> <i class="b-comment__infp__slash">/</i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="f-comment__descr__txt">
                                                                        <p>
                                                                            <?php
                                                                                echo $item->comment;
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @if(!Auth::guest())
                                        <div class="b-blog-form-box">
                                            <h3 class="f-primary-b b-title-description f-title-description">
                                                Bình luận của bạn
                                            </h3>
                                            <div class="row">
                                            <form action="{{asset('binh-luan/'.$place_detail->link)}}" method="POST" accept-charset="utf-8">
                                             <!-- <form action="{{asset('binh-luan')}}" method="POST" > -->
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="col-md-12">
                                                    <div class="b-form-row b-form--contact-size">
                                                        <label class="b-form-vertical__label" for="create_account_phone">Bình luận của bạn</label>
                                                        <textarea id="comment" data-userid="{{Auth::user()->id}}" name="comment" class="form-control comment" rows="5"></textarea>
                                                    </div>
                                                    <div class="b-form-row">
                                                        <button type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100 send-btn">Gửi bình luận</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="f-primary-b b-h4-special f-h4-special">Các địa điểm cùng danh mục</h4>
                            <div class="row">
                                <div class="b-col-default-indent">
                                @foreach($related as $item)
                                    <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                        <div class="b-product-preview">
                                            <div class="b-product-preview__img view view-sixth">
                                            <img data-retina  src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:262px; width:268px" alt=""/>
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="{{asset('them-vao-yeu-thich/'.$item->id)}}" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                
                                                        <a href="{{url('dia-diem/'.$item->link)}}"  class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">{{$item->view}}</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="{{url('dia-diem/'.$item->link)}}" class="f-product-preview__content_title">{{$item->name}}</a>
                                                <div class="f-product-preview__content_category f-primary-b">{{$item->address}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach
                                    <div class="clearfix hidden-xs"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <aside>
    <div class="row b-col-default-indent">

                            <div class="col-md-12">
                        <div class="b-categories-filter">
                            <?php
                                $cate_cha=DB::table('category')->where('level','=','1')->get();

                            ?>
                            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Danh mục địa điểm</h4>
                            <ul>
                                @foreach($cate_cha as $cate)
                                <?php
                                     $cate_con=DB::table('category')->where('parent_id',$cate->id)->get();
                                ?>
                                    @foreach($cate_con as $cate_c)
                                    <li>
                                        <a class="f-categories-filter_name" href="{{asset('danh-muc/' .$cate_c->link)}}"><i class="fa fa-plus"></i>{{$cate_c->name}}</a>
                                        <span class="b-categories-filter_count f-categories-filter_count">12</span>
                                    </li>
                                    @endforeach
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>

        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Địa điểm mới</h4>
            @foreach($new_place as $item)
            <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
                <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
                    <div class="b-blog-short-post__item_img">
                        <a href="{{url('dia-diem/'.$item->link)}}"><img data-retina src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:100px; width:110px" alt=""/></a>
                    </div>
                    <div class="b-remaining">
                        <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                            <a href="{{url('dia-diem/'.$item->link)}}">{{$item->name}} </a>
                        </div>
                        <div class="f-blog-short-post__item_price  f-primary-b">
                            <h5>{{$item->address}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</aside>
                    </div>
                </div>
            </div>
        </section>

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
<script src="{{asset('public/rateit/scripts/jquery.rateit.js')}}" type="text/javascript"></script>
<script type="text/javascript">
   $(function () {
       $('#rateit_star1').rateit({min: 1, max: 10, step: 1});
       $('#rateit_star1').bind('rated', function (e) {
         var ri = $(this);
         var value = ri.rateit('value') - 1;
         var placeID = ri.data('productid');
       // alert('Bạn đã đánh giá '+value +' sao cho sản phẩm có id là:'+placeID );
         //không cho phép đánh giá,sau khi đã đá nh giá xong
         ri.rateit('readonly', true);
        $.ajax({
            type: "POST",
            url: 'danh-gia',
            data: {'placeID': placeID, 'value': value},
            success: function(data){
                // alert(data);
            }
        });
     });
   });
</script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.send-btn').click(function(){            
        $.ajax({
          url: 'binh-luan',
          type: "post",
          data: {'comment':$('input[comment]').val()},
          success: function(data){
            alert(data);
          }
        });      
      }); 
    });
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1589845541325715";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>