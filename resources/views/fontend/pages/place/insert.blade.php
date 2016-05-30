<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Food5 - Đăng địa điểm mới
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
            <li><i class="fa fa-angle-right"></i><a href="#">Đăng địa điểm</a></li>

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
    <a href="#"><img class="j-data-element" data-animate="fadeInDown" data-retina src="{{asset(Auth::user()->avatar)}}" alt=""/></a>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="about_us_meet_our_team_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
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
                Form thêm mới
            </h3>
            <div class="row">
            @if(Session::has('flash_message'))
                 <div class="alert alert-{!! Session::get('flash_level') !!}">
                  {!! Session::get('flash_message') !!}
                  </div>
             @endif
                <form action="{{asset('dang-dia-diem')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6">
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="name">Tên </label>
                            <div class="b-form-vertical__input">
                                <input type="text" id="name" name="name" required class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="title">Chọn danh mục địa điểm</label>
                            <div class="b-form-vertical__input">
                                <select name="category" class="form-control" required>
                                    <option value="">Chọn danh mục</option>
                                         <?php cate_parent($parent); ?>
                                </select>
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="email">Địa chỉ</label>
                            <div class="b-form-vertical__input">
                                <input type="text" id="email" name="address" required class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="email">Số điện thoại</label>
                            <div class="b-form-vertical__input">
                                <input type="text"  name="phone" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="website">Ảnh chính</label>
                            <div class="b-form-vertical__input">
                                <input type="file" id="website" name="fImages" required class="form-control" />
                            </div>
                        </div>
                         <div class="b-form-row">
                            <label class="b-form-vertical__label" for="website">Video Giới thiệu</label>
                            <div class="b-form-vertical__input">
                                <input type="text" name="video" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="b-form-row b-form--contact-size">
                            <label class="b-form-vertical__label">Thông tin </label>
                            <textarea class="form-control" name="description"rows="4"></textarea>
                        </div>
                        <div class="b-form-row">
                            <button type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">Thêm mới</button>
                            
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
                        <?php
                            echo $item->description;
                        ?>
                    </div>
                </div>
                <div class="b-some-examples__item_action">
                    <div class="b-right">
                        <a href="{{url('dia-diem/'.$item->link)}}"   class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Xem chi tiết</a>
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
            <div class="b-categories-filter">
                <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Địa điểm bạn đã đăng</h4>
                <ul>
                @foreach  ($postedplace as $item)
                    <li>
                        <a class="f-categories-filter_name" href="{{asset('dia-diem/'.$item->link)}}"><i class="fa fa-plus"></i>{{$item->name}}</a>
                        <span class="b-categories-filter_count f-categories-filter_count">{{$item->view}}</span>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="b-categories-filter">
                <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Món ăn bạn đã đăng</h4>
                <ul>
                @foreach  ($postedfood as $item)
                    <li>
                        <a class="f-categories-filter_name" href="{{asset('mon-an/'.$item->link)}}"><i class="fa fa-plus"></i>{{$item->name}}</a>
                        <span class="b-categories-filter_count f-categories-filter_count">{{$item->view}}</span>
                    </li>
                @endforeach
                </ul>
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
</script><script>
    $("div.alert").delay(3000).slideUp();
</script>
</body>
</html>