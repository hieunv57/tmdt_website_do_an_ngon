<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Food5 - {{$food_detail->name}}
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
                    <li><i class="fa fa-angle-right"></i><a href="#">Địa điểm</a></li>
                    <li><i class="fa fa-angle-right"></i><span>Thông tin chi tiết</span></li>
                </ul>
            </div>
        </div>

        <section class="b-infoblock">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ">
                        <div class="b-shortcode-example">
                            <div class=" f-primary-b b-title-b-hr f-title-b-hr b-null-top-indent">{{$food_detail->name}}</div>
                            <div class="b-product-card b-default-top-indent">
                                <div class="b-product-card__visual-wrap">
                                    <div class="flexslider b-product-card__visual flexslider-zoom">
                                        <ul class="slides">
                                            <li>
                                                <img src="{{asset('public/backend/images/places/'. $food_detail->image)}}" />
                                            </li>
                                            @foreach($image as $item_image)
                                            <li>
                                                <img src="{{asset('public/backend/images/places/'. $item_image->image)}}" />
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="flexslider flexslider-thumbnail b-product-card__visual-thumb carousel-sm">
                                        <ul class="slides">
                                            <li>
                                                <img src="{{asset('public/backend/images/places/'. $food_detail->image)}}" />
                                            </li>
                                            @foreach($image as $item_image)
                                            <li>
                                                <img src="{{asset('public/backend/images/places/'. $item_image->image)}}" />
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="b-product-card__info">
                                    <h4 class="f-primary-b b-h4-special f-h4-special">Thông tin chi tiết</h4>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Địa chỉ</div>
                                        <span class="f-product-card__info_price c-default f-primary-b">{{$food_detail->address}}</span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Giá từ</div>
                                        <span class="f-product-card__info_price c-default f-primary-b">{{$food_detail->price}}</span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Đánh giá</div>
                                        <div class="b-stars-group f-stars-group b-margin-right-standard">
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="f-primary-b c-tertiary f-title-smallest"> <a href="#">(12 reviews)</a></span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Lượt xem</div>
                                        <span class="f-primary-b c-tertiary f-title-smallest">{{$food_detail->view}} lượt xem</span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_description f-product-card__info_description">
                                           <?php
                                                echo $food_detail->description;
                                           ?>
                                        </div>
                                    </div>

                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Danh mục</div>
                                        <a class="f-more f-title-smallest" href="">Danh mục</a>, <a class="f-more f-title-smallest" href="">{{$food_detail->category_name}}</a>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-btn-group-hor f-btn-group-hor">
                                            <div class="fb-like" data-href="{{url('dia-diem/'.$food_detail->link)}}"  data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                            
                                            <g:plusone size="medium" ></g:plusone>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="b-shortcode-example">
                            <div class="b-tabs f-tabs j-tabs b-tabs-reset">
                                <ul>
                                    <li><a href="#tabs-21">Chi tiết địa điểm</a></li>
                                    <li><a href="#tabs-22">Video giới thiệu</a></li>
                                    <li><a href="#tabs-23">Bình luận</a></li>
                                    <li><a href="#tabs-24">Bản đồ</a></li>
                                </ul>
                                <div class="b-tabs__content">
                                    <div id="tabs-21">
                                        <h4 class="f-tabs-vertical__title f-primary-b">Chi tiết địa điểm</h4>
                                        <p><?php echo $food_detail->description ?></p>
                                        
                                    </div>
                                    <div id="tabs-22">
                                        <h4 class="f-tabs-vertical__title f-primary-b">Video giới thiệu</h4>
                                        <p><iframe src="{{$food_detail->video}}"></iframe></p>
                                        
                                    </div>
                                     <div id="tabs-23">
                                       <div class="fb-comments" data-href="{{asset($food_detail->link)}}" data-numposts="10"></div>
                                     </div>
                                     <div id="tabs-24">
                                       <!-- <div class="fb-comments" data-href="{{asset($food_detail->link)}}" data-numposts="10"></div> -->
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
                                                    <img data-retina src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:262px; width:268px" alt=""/>
                                                    <div class="b-item-hover-action f-center mask">
                                                        <div class="b-item-hover-action__inner">
                                                            <div class="b-item-hover-action__inner-btn_group">
                                                                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                                
                                                                <a href="{{url('dia-diem/'.$item->link)}}"  class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="b-product-preview__content">
                                                    <div class="b-product-preview__content_col">
                                                        <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">{{$item->price}}</span>
                                                    </div>
                                                    <div class="b-product-preview__content_col">
                                                        <h6><div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="{{url('dia-diem/'.$item->link)}}" >{{$item->name}}</a></div></h6>
                                                        <div class="f-product-preview__content_category f-primary-b">{{$item->address}}</div>
                                                        <div>Đăng bởi<a href=""> {{$item->name_user}}</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                                                <div class="clearfix visible-xs-block"></div>
        
                                </div>
                            </div>
                        </div>
                                <div>
                                                        <h4 class="f-primary-b b-h4-special f-h4-special">Có thể bạn muốn xem</h4>
                                                        <div class="row">
                                                            <div class="b-col-default-indent">
                                                            @foreach($random_food as $item)
                                                                 <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                            <div class="b-product-preview">
                                                <div class="b-product-preview__img view view-sixth">
                                                    <img data-retina src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:262px; width:268px" alt=""/>
                                                    <div class="b-item-hover-action f-center mask">
                                                        <div class="b-item-hover-action__inner">
                                                            <div class="b-item-hover-action__inner-btn_group">
                                                                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                                
                                                                <a href="{{url('dia-diem/'.$item->link)}}"  class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="b-product-preview__content">
                                                    <div class="b-product-preview__content_col">
                                                        <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">{{$item->price}}</span>
                                                    </div>
                                                    <div class="b-product-preview__content_col">
                                                        <h6><div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="{{url('dia-diem/'.$item->link)}}" >{{$item->name}}</a></div></h6>
                                                        <div class="f-product-preview__content_category f-primary-b">{{$item->address}}</div>
                                                        <div>Đăng bởi<a href=""> {{$item->name_user}}</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                                                <div class="clearfix visible-xs-block"></div>
        
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
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Địa điểm yêu thích của bạn</h4>
            @if(Auth::guest())
                <h5>Bạn chưa đăng nhập</h5>
            @else
                @foreach($wishlist_place as $item)
                <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
                    <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
                        <div class="b-blog-short-post__item_img">
                            <a href="#"><img data-retina src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:50px; width:50px" alt=""/></a>
                        </div>
                        <div class="b-remaining">
                            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                                <a href="{{asset('dia-diem/'. $item->link)}}">{{$item->name}}</a>
                            </div>
                            <div class="f-blog-short-post__item_price  f-primary-b">
                                {{$item->address}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif




        </div>

</aside>
                    </div>
                </div>
            </div>
        </section>

    </div>
@include('fontend.include.footer')
@include('fontend.include.script')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=548639268641647";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js" ></script>
<!-- <script src="http://uhchat.net/code.php?f=c3e331"></script> -->
</body>
</html>