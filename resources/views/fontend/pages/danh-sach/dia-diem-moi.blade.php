<!DOCTYPE html>
<html>
@include('fontend.include.head')
<body>
    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
@include('fontend.include.header')
<div class="j-menu-container"></div>

    <div class="l-main-container">

        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#">Danh sách địa điểm mới</a></li>
                </ul>
            </div>
        </div>

        <section class="b-infoblock">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ">

                        <div class="row">
                            <div class="b-col-default-indent">
                            @foreach($newplace as $item)
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                        <img data-retina src="{{asset('public/backend/images/places/' .$item->image)}}"  style="height:262px; width:268px" alt=""/>
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
                                <div class="clearfix visible-xs-block"></div>
                            @endforeach
                            </div>

                            <div class="container">
                                <div class="b-pagination f-pagination">
                                <ul>
                                   {!! $newplace->render() !!}
                                </ul>
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
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Địa điểm được nhiều lượt yêu thích</h4>
            @foreach($most_wishlist as $item)
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
@include('fontend.include.script')

</body>
</html>