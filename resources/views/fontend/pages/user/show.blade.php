<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Food5 - Thông tin cá nhân
@stop
<body>
<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
@include('fontend.include.header')
<div class="j-menu-container"></div>


<div class="l-main-container">

<div class="b-breadcrumbs f-breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="#"><i class="fa fa-home"></i>Trang chủ</a></li>
            <li><i class="fa fa-angle-right"></i><a href="#">Thông tin cá nhân</a></li>

        </ul>
    </div>
</div>
<div class="l-inner-page-container">
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="b-detail-home-content">
<form action="{{asset('thong-tin-ca-nhan/cap-nhat')}}" method="POST" enctype="multipart/form-data">
   <input name="_method" type="hidden" value="PATCH">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row l-inner-page-container">
    <div class="col-md-4">
        <div class="b-employee-container row">
            <div class="col-md-12">
                <div class="b-employee-item b-employee-item--left b-employee-item--color">
                    <div class=" view view-sixth">
    <a href="#"><img class="j-data-element" data-animate="fadeInDown" data-retina src="{{asset(Auth::user()->avatar)}}" style="height:260px; width:268px" alt=""/></a>

    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="about_us_meet_our_team_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
<input type="file" name="avatar" class="form-control" value="">
                    <h4 class="f-primary-b">{{ Auth::user()->name }}</h4>
                    <p>
                        Email : {{ Auth::user()->email }}<br />
                        Địa chỉ : {{ Auth::user()->address }}<br />
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="b-contact-form-box--bord">
            <h3 class="f-primary-b b-title-description f-title-description">
                Thông tin cá nhân
            </h3>
            <div class="row">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6">
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="name">Tên </label>
                            <div class="b-form-vertical__input">
                                <input type="text" value="{{ $user->name }}" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-vertical__label">Email</label>
                            <div class="b-form-vertical__input">
                                <input type="text" value="{{$user->email}}" name="email" readonly class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-vertical__label">Địa chỉ</label>
                            <div class="b-form-vertical__input">
                                <input type="text" value="{{$user->address}}" name="address" class="form-control" />
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="email">Địa chỉ facebook</label>
                            <div class="b-form-vertical__input">
                                <input type="text" value="{{$user->facebook}}"  name="facebook" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="email">Số điện thoại</label>
                            <div class="b-form-vertical__input">
                                <input type="text" value="{{$user->phone}}"  name="phone" class="form-control" />
                            </div>
                        </div>
                         <div class="b-form-row">
                            <label class="b-form-vertical__label" for="website">Giới tính</label>
                            <div class="b-form-vertical__input">
                                <input type="text" name="gender" value="{{ $user->gender }}" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <button type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">Cập nhật</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<hr/>
<section>
    <div class="b-carousel-secondary f-carousel-secondary b-some-examples-tertiary f-some-examples-tertiary b-carousel-reset">
        <div class="b-carousel-title f-carousel-title f-primary-b">Địa điểm mới</div>
        <div class="b-some-examples f-some-examples j-carousel-sidebar">
        @foreach($place_posted as $item)
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





        </div>
    </div>
</section>
</div>
<div class="visible-xs-block visible-sm-block b-hr"></div>
<div class="col-md-3">

    <div class="row b-col-default-indent">
        <div class="col-md-12">
            <div class="b-categories-filter">
    <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">Các địa điểm bạn đã đăng</h4>
    <ul>
        @foreach ($place_posted as $item)
        <li>
            <a class="f-categories-filter_name" href="{{url('dia-diem/'.$item->link)}}"><i class="fa fa-plus"></i>{{$item->name}}</a>
            <span class="b-categories-filter_count f-categories-filter_count">{{$item->view}}</span>
        </li>
       @endforeach
    </ul>
</div>
        </div>
    </div>
    <div class="row">
 <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Địa điểm yêu thích của bạn</h4>
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




        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@include('fontend.include.footer')
@include('fontend.include.script')
</body>
</html>