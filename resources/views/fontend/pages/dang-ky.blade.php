<!DOCTYPE html>
<html>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/S-Bahn-Logo_rot.svg/500px-S-Bahn-Logo_rot.svg.png">
@extends('fontend.include.head')
@section('title')
    Đăng ký tài khoản Food5
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
                <li><a href="{{asset('dang-ky')}}"><i class="fa fa-angle-right"></i> Đăng ký thành viên</a></li>
               
            </ul>
        </div>
    </div>
    <div class="container b-container-login-page">
        <div class="row">
            <div class="col-md-6">
                <div class="b-form-row f-primary-l f-title-big c-secondary">Đăng ký tài khoản</div>
                <div class="b-form-row">Vui lòng điền đầy đủ các thông tin</div>
                <hr class="b-hr" />
                	@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                <form  role="form" method="POST" action="{{asset('dang-ky')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row b-form-inline b-form-horizontal">
                    <div class="col-xs-12">
                    	<div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_email">Tên<span class='require'>*</span></label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="name" placeholder="Bắt buộc" required class="form-control" />
                            </div>
                        </div>
                         <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_location">Địa chỉ facebook</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="facebook" placeholder=" Không bắt buộc" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_email">Địa chỉ email<span class='require'>*</span></label>
                            <div class="b-form-horizontal__input">
                                <input type="email" name="email" required class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_password">Mật khẩu<span class='require'>*</span></label>
                            <div class="b-form-horizontal__input">
                                <input type="password" name="password" required class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_confirm">Xác nhận mật khẩu<span class='require'>*</span></label>
                            <div class="b-form-horizontal__input">
                                <input type="password" name="password_confirmation"  required class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_confirm">Giới tính</label>
                            <div class="b-form-horizontal__input">
                                <select class="form-control" name="gender">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Không Xác Định">Không Xác Định</option>
                                </select>
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_phone">Số điện thoại</label>
                            <div class="b-form-horizontal__input">
                                <input type="number" name="phone"  class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="create_account_location">Địa chỉ</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="address"  class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <div class="b-form-horizontal__label"></div>
                            <div class="b-form-horizontal__input">
                            	<button type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" >Đăng ký</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="f-primary-l f-title-big c-secondary">Chào mừng đến với Sfood</div>
                <p>Website chia sẻ các địa điểm ẩm thực ngon tại khu vực hà nội.</p>
                <div class="b-shortcode-example">
                   <!--  <ul class="b-list-markers f-list-markers">
                        <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Fusce viverra nisl eu nisl suscipit dictum.</a></li>
                        <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Morbi vehicula massa ut libero laoreet faucibus.</a></li>
                        <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Nullam a felis volutpat, gravida est eget, ultrices velit.</a></li>
                        <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Proin egestas nibh luctus dui cursus, sit amet vestibulum massa dignissim.</a></li>
                        <li><i class="fa fa-check-circle b-list-markers__ico f-list-markers__ico"></i> <a href="#">Etiam facilisis sapien ut ornare euismod.</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>
@include('fontend.include.footer')
@include('fontend.include.script')
<!-- <script src="http://uhchat.net/code.php?f=ac7ac4"></script> -->
</body>
</html>