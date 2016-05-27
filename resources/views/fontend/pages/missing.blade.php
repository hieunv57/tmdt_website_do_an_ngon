<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Trang không tồn tại
@stop
<body>
<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
@include('fontend.include.header')
<div class="j-menu-container"></div>

<div class="l-main-container">
    <div class="b-page-error">
        <div class="container">
            <div class="b-title-error f-title-error">
                <span class="f-primary-eb">404</span>
                <strong class="f-primary-l">Page Not Found !</strong>
            </div>
            <div class="b-error-description f-error-description">
                <strong class="f-primary">Xin lôi, trang này không tồn tại</strong>
                <span class="f-primary">Bạn vui lòng kiêm tra lại đường dẫn, xin cảm ơn. Hoặc trang mà bạn tìm kiếm đã bị xóa</span>
            </div>
          
        </div>
    </div>
</div>

@include('fontend.include.footer')
@include('fontend.include.script')
<script src="http://uhchat.net/code.php?f=ac7ac4"></script>
</body>
</html>