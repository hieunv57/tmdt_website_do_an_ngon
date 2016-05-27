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
<div class="row l-inner-page-container">
    <div class="col-md-4">
        <div class="b-employee-container row">
            <div class="col-md-12">
                <div class="b-employee-item b-employee-item--left b-employee-item--color">
                    <div class=" view view-sixth">
    <a href="#"><img class="j-data-element" data-animate="fadeInDown" data-retina  alt=""/></a>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="about_us_meet_our_team_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
                    <h4 class="f-primary-b">{{$user->name}}</h4>
                    <p>
                        
                        Địa chỉ : {{ $user->address }}<br />
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
                <form  method="POST" enctype="multipart/form-data">
                 <input name="_method" value="PATCH" type="hidden">
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
        @foreach($place_new as $item)
            <div class="b-some-examples__item f-some-examples__item">
                <div class="b-some-examples__item_img view view-sixth">
                    <img data-retina="" src="{{asset('public/backend/images/places/' .$item->image)}}" style="height:262px; width:268px" alt="">
                    <div class="b-item-hover-action f-center mask">
                        <div class="b-item-hover-action__inner">
                            <div class="b-item-hover-action__inner-btn_group">
                                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-some-examples__item_info">
                    <div class="b-some-examples__item_info_level b-some-examples__item_name f-some-examples__item_name f-primary-b"><a href="#">{{$item->name}}</a></div>
                    <div class="b-some-examples__item_info_level b-some-examples__item_double_info f-some-examples__item_double_info clearfix b-info-container--home">
                        <div class="b-blog-one-column__info_container">
                            <div class="b-blog-one-column__info">
                                2 <i class="b-icons b-icon--shower"></i> 3 <i class="b-icons b-icon--bed2"></i>
                            </div>
                            <div class="f-footer-mini-right f-selection">
                                231 m2
                            </div>
                        </div>
                    </div>
                    <div class="b-some-examples__item_info_level b-some-examples__item_description f-some-examples__item_description b-info-container--home">
                        Suspendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan.
                    </div>
                </div>
                <div class="b-some-examples__item_action">
                    <div class="b-right">
                        <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">view detail</a>
                    </div>
                    <div class="b-remaining b-some-examples__item_total f-some-examples__item_total f-primary-b">$890,000</div>
                </div>
        </div>
        @endforeach





        </div>
    </div>
</section>
</div>
<div class="visible-xs-block visible-sm-block b-hr"></div>
<div class="col-md-3">
    <div class="row">
        <div class="col-md-12">
            <div class="b-find-box">
    <div class="b-find_title f-find_title f-primary-b">
        <i class="fa fa-search"></i>
        Các địa điểm bạn đã đăng
    </div>
    <div class="b-find_form f-find_form">
        <div class="b-form-row">
            <label class="b-form-vertical__label">Property ID</label>
            <input type="text" class="form-control" />
            <div class="row b-find--row">
                <div class="col-md-12">
                    <label class="b-form-vertical__label">Property Location</label>
                    <div class="b-product-cart-small__content_row b-form-row--big">
                        <div class="b-form-row b-form-select c-arrow-secondary">
                            <select class="j-select">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="b-form-vertical__label">Property Type</label>
                    <div class="b-product-cart-small__content_row b-form-row--big">
                        <div class="b-form-row b-form-select c-arrow-secondary">
                            <select class="j-select">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="b-form-vertical__label">Property Status</label>
                    <div class="b-product-cart-small__content_row b-form-row--big">
                        <div class="b-form-row b-form-select c-arrow-secondary">
                            <select class="j-select">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="b-form-vertical__label">Min Beds</label>
                    <div class="b-product-cart-small__content_row b-form-row--big">
                        <div class="b-form-row b-form-select c-arrow-secondary">
                            <select class="j-select">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="b-form-vertical__label">Min Baths</label>
                    <div class="b-product-cart-small__content_row b-form-row--big">
                        <div class="b-form-row b-form-select c-arrow-secondary">
                            <select class="j-select">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="b-form-vertical__label">Min Price</label>
                    <div class="b-product-cart-small__content_row b-form-row--big">
                        <div class="b-form-row b-form-select c-arrow-secondary">
                            <select class="j-select">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="b-form-vertical__label">Max Price</label>
                    <div class="b-product-cart-small__content_row b-form-row--big">
                        <div class="b-form-row b-form-select c-arrow-secondary">
                            <select class="j-select">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="b-form-vertical__label">Min Area (Sq Ft)</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label class="b-form-vertical__label">Max Area (Sq Ft)</label>
                    <input type="text" class="form-control" />
                </div>
            </div>
            <div class="b-form-horizontal__input">
                <a href="#" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">find your hotels</a>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    <div class="row b-col-default-indent">
        <div class="col-md-12">
            <div class="b-categories-filter">
    <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">Property Types</h4>
    <ul>
        <li>
            <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Single Family Home</a>
            <span class="b-categories-filter_count f-categories-filter_count">12</span>
        </li>
        <li>
            <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Villa</a>
            <span class="b-categories-filter_count f-categories-filter_count">23</span>
        </li>
        <li>
            <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Condominium</a>
            <span class="b-categories-filter_count f-categories-filter_count">11</span>
        </li>
    </ul>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special--gray">Featured Properties</h4>
<div class="j-accordion b-accordion b-accordion--with-standard-icon f-accordion b-accordion--smallindent">
    <h3 class="b-accordion__title f-accordion__title">1200 Anastasia Avenue</h3>

    <div class="b-accordion__content">
        <div class="b-accordion__img">
            <img data-retina src="img/shortcode/accordion-3.jpg" alt=""/>
        </div>
        <div>
            <p>Sed auctor pretium justo id lobortis. Nam quis vulputate sem, ac vestibulum lacus. Integer at lectus ligula. Cras sit amet sollicitudin metus</p>
            <p class="f-primary-b b-null-bottom-indent f-title-small c-default">$3,250 Per Month</p>
        </div>
    </div>
    <h3 class="b-accordion__title f-accordion__title">Florida 5, Pinecrest, FL</h3>

    <div class="b-accordion__content">
        <div class="b-accordion__img">
            <img data-retina src="img/shortcode/accordion-5.jpg" alt=""/>
        </div>
        <p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>

        <p>Sed auctor pretium justo id lobortis. Nam quis vulputate sem, ac vestibulum lacus. Integer at
            lectus ligula. Cras sit amet sollicitudin metus</p>
    </div>
    <h3 class="b-accordion__title f-accordion__title">401 Biscayne Boulevard, Miami</h3>

    <div class="b-accordion__content">
        <div class="b-accordion__img">
            <img data-retina src="img/shortcode/accordion-8.jpg" alt=""/>
        </div>
        <p class="f-primary-b b-null-bottom-indent f-title-small c-default">Suspendisse vitae metus enim</p>

        <p>Sed auctor pretium justo id lobortis. Nam quis vulputate sem, ac vestibulum lacus. Integer at
            lectus ligula. Cras sit amet sollicitudin metus</p>
    </div>
</div>
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