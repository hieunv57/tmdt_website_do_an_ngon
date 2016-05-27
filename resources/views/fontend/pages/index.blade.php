<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Food5 - Chia sẻ các địa điểm ẩm thực được yêu thích tại Hà Nội
@stop
<body onload="time()">
  <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
@include('fontend.include.header')
<div class="j-menu-container"></div>


  <div class="l-main-container">

  @include('fontend.include.slider')

<section class="b-infoblock b-diagonal-line-bg-light">
 <marquee width="100%" behavior="scroll" direction="left" scrollamount="7">
    <a target="_blank" class="b-link f-link f-primary-b f-uppercase">Chào mừng bạn đến với Food5, website chia sẻ các địa điểm, món ngon tại khu vực Hà Nội</a>
 </marquee>
  <div class="container">
    <div class="row b-col-default-indent">
    </div>
  </div>
</section>
<section class="b-infoblock">
    <div class="container">
        <div class="row">
            <div class="col-md-9 ">
                <div class="b-sort-panel">
    <!-- <div class="b-sort-panel__inner">
        <form action="#">
            <div class="b-select b-left">
                <select class="j-select" name="productAtPage" id="productAtPage">
                    <option>1 products/page</option>
                    <option>6 products/page</option>
                    <option selected="selected">9 products/page</option>
                </select>
            </div>

            <div class="b-select b-left">
                <select class="j-select" name="productAtPage" id="productAtPage">
                    <option>Order by price</option>
                    <option selected="selected">Order by name</option>
                </select>
            </div>
            <div class="b-sort-panel__inner_icon-sort f-sort-panel__inner_icon-sort fa fa-sort-amount-desc"></div>

            <div class="b-view-switcher f-view-switcher b-right">
                <div class="b-view-switcher_column is-view-switcher__item-active fa fa-th-list"></div>
                <div class="b-view-switcher_table fa fa-th"></div>
            </div>
        </form>
    </div> -->
				</div>
				<a href="{{asset('danh-sach/dia-diem-moi')}}" "email me"><h3>Địa điểm mới nhất</h3></a>
                <div class="row">
                    <div class="b-col-default-indent">
                    @foreach($place_new as $item)
                        <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                            <div class="b-product-preview">
							    <div class="b-product-preview__img view view-sixth">
								    <img data-retina src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:262px; width:268px" alt=""/>
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
							            <!-- <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">{{$item->price}}</span> -->
							        </div>
							        <div class="b-product-preview__content_col">
                                        <h6><div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="{{url('dia-diem/'.$item->link)}}" >{{$item->name}}</a></div></h6>
							            <!-- <a href="{{url('dia-diem/'.$item->link)}}" class="f-product-preview__content_category f-primary-b">{{$item->name}}</a> -->
							            <div class="f-product-preview__content_category f-primary-b">{{$item->address}}</div>
                                        <div>Đăng bởi<a href=""> {{$item->name_user}}</a></div>

							        </div>
							    </div>
							</div>
                        </div>
                       
                        @endforeach
                    </div>
                </div>
                <hr>
                <a href="{{asset('danh-sach/dia-diem-duoc-quan-tam')}}"><h3>Địa điểm được quan tâm nhất</h3></a>
                
                <div class="row">
                    <div class="b-col-default-indent">
                    @foreach($place_most_view as $item)
                        <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                            <div class="b-product-preview">
							    <div class="b-product-preview__img view view-sixth">
								    <img data-retina src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:262px; width:268px" alt=""/>
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
							            <h6><div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="{{url('dia-diem/'.$item->link)}}" >{{$item->name}}</a></div></h6>
							            <div class="f-product-preview__content_category f-primary-b">{{$item->address}}</div>
                                        <div>Đăng bởi<a href=""> {{$item->name_user}}</a></div>
							        </div>
							    </div>
							</div>
                        </div>
                        
                        @endforeach

                    </div>
                </div>
                <a href="{{asset('danh-sach/dia-diem-moi')}}" "email me"><h3>Món ngon </h3></a>
                <div class="row">
                    <div class="b-col-default-indent">
                    @foreach($food_new as $item)
                        <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                            <div class="b-product-preview">
                                <div class="b-product-preview__img view view-sixth">
                                    <img data-retina src="{{asset('public/backend/images/foods/' .$item->image)}}" style="height:262px; width:268px" alt=""/>
                                    <div class="b-item-hover-action f-center mask">
                                        <div class="b-item-hover-action__inner">
                                            <div class="b-item-hover-action__inner-btn_group">
                                                 <a href="{{asset('them-vao-yeu-thich/'.$item->id)}}" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                
                                                <a href="{{url('mon-ngon/'.$item->link)}}"  class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-product-preview__content">
                                    <div class="b-product-preview__content_col">
                                        <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">{{$item->price}}</span>
                                    </div>
                                    <div class="b-product-preview__content_col">
                                        <h6><div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="{{url('mon-ngon/'.$item->link)}}" >{{$item->name}}</a></div></h6>
                                        <!-- <a href="{{url('dia-diem/'.$item->link)}}" class="f-product-preview__content_category f-primary-b">{{$item->name}}</a> -->
                                        <div class="f-product-preview__content_category f-primary-b">{{$item->address}}</div>
                                        <div>Đăng bởi<a href=""> {{$item->name_user}}</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        @endforeach
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
								        <!-- <span class="b-categories-filter_count f-categories-filter_count">12</span> -->
								    </li>
								    @endforeach
							    @endforeach
							   
							</ul>
            			</div>
        			</div>
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Địa điểm được đánh giá cao</h4>





        </div>
        @if(!Auth::guest())
        <div class="col-md-12">
            <div class="b-categories-filter">
                <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Địa điểm yêu thích</h4>
                <ul>
                @foreach  ($wishlist_place as $item)
                    <li>
                        <a class="f-categories-filter_name" href="{{asset('dia-diem/'.$item->link)}}"><i class="fa fa-plus"></i>{{$item->name}}</a>
                        <span class="b-categories-filter_count f-categories-filter_count">{{$item->view}}</span>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        @endif
        <div class="col-md-12">
            <div class="b-categories-filter">
                <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Top 10 người đăng nhiều địa điểm nhất</h4>
                <ul>
                @foreach  ($user_post_most_place as $item)
                    <li>
                        <a class="f-categories-filter_name" href="{{asset('thong-tin-nguoi-dung/'.$item->id_user)}}"><i class="fa fa-plus"></i>{{$item->name_user}}</a>
                        <span class="b-categories-filter_count f-categories-filter_count">{{$item->posted}}</span>
                    </li>
                @endforeach
                </ul>
            </div>
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
<!-- <script src="http://uhchat.net/code.php?f=c3e331"></script> -->
<!-- <audio src="{{asset('public/Charlie XCX - Boom Clap.mp3')}}"  autoplay autobuffer autoloop loop controls></audio> -->
</body>
</html>