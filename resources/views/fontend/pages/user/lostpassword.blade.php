<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Lấy lại mật khẩu
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
                <li><i class="fa fa-angle-right"></i><span> Quên mật khẩu</span></li>
            </ul>
        </div>
    </div>
    <div class="container b-forgot-password-page">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="b-forgot-password-form">
                    <h3 class="f-primary-l is-global-title">Quên mật khẩu</h3>
                    <p>Nhập địa chỉ email của bạn</p>
                    <div class="b-form-row b-form-inline b-form-horizontal b-form-password">
                    <form action="{{asset('resetpassword')}}" method="POST" accept-charset="utf-8">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="b-form-row">
                            <div class="b-form-horizontal--mail f-form-horizontal--mail">
                                <i class="fa fa-envelope"></i>
                                <input type="email" required class="form-control" placeholder="Địa chỉ email của bạn" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <div>
                                <button type="sutmit" class="b-btn f-btn button-sm b-btn-default f-primary-b b-btn__w100">Gửi</button>
                                
                            </div>
                        </div>
                    </form>

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