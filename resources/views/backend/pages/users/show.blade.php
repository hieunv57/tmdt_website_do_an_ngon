<!DOCTYPE html>
<html lang="en">
@include('backend.include.head')
<body class="sidebar-icons">
<div><!--BEGIN THEME SETTING-->
    <!--END THEME SETTING--><!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    @include('backend.include.top')
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        @include('backend.include.slidebar')
        <!--END SIDEBAR MENU--><!--BEGIN CHAT FORM-->
        <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">User Profile</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li><a href="#">Extra</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">User Profile</li>
                </ol>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12"><h2>Thông tin</h2>

                        <div class="row mtl">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="text-center mbl"><img src="http://lorempixel.com/640/480/business/1/" alt="" class="img-responsive"/></div>
                                    <div class="text-center mbl"><a href="#" class="btn btn-green"><i class="fa fa-upload"></i>&nbsp;
                                        Upload</a></div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <td>Tên</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>{{$user->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Trạng thái</td>
                                        <td><span class="label label-success">{{$user->status}}</span></td>
                                    </tr>
                                    <tr>
                                        <td>Đánh giá</td>
                                        <td><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Tham gia ngày</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-edit" data-toggle="tab">Cập nhật thông tin</a></li>
                                    <li><a href="#tab-place" data-toggle="tab">Các địa điểm đã đăng</a></li>
                                </ul>
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-edit" class="tab-pane fade in active">
                                        <form action="{{url('admin/thanh-vien/cap-nhat/'.$user->id)}}" method="POST" class="form-horizontal">
                                        <input name="_method" value="PATCH" type="hidden">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-group"><label class="col-sm-3 control-label">Địa chỉ email</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="email" name="email"  value="{{$user->email}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Tên</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" name="name" value="{{$user->name}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Địa chỉ</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" name="address" value="{{$user->address}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Địa chỉ facebook</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" name="facebook" value="{{$user->facebook}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Số điện thoại</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="number" name="phone" value="{{$user->phone}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group"><label class="col-sm-3 control-label">Giới tính</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input  name="gender" value="{{$user->gender}}" type="text" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <button type="submit" class="btn btn-green btn-block">Update</button>
                                        </form>
                                    </div>
                                    <div id="tab-place" class="tab-pane fade in">
                                        <div id="table-table-tab" class="tab-pane fade in active">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="table-container">
                                                        <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                                            <thead>
                                                                <tr>
                                                                    <th width="9%">ID</th>
                                                                    <th width="9%">Tên địa điểm</th>
                                                                    <th width="10%">Địa chỉ</th>
                                                                    <th width="10%">Loại</th>
                                                                    <th width="10%">Ngày đăng</th>
                                                                    <th width="10%">Hành động</th>
                                                                </tr>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Henry</td>
                                                                        <td>United States</td>
                                                                        <td>Male</td>
                                                                        <td>32</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                                                                                Edit
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </thead>
                                                        </table>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            </div>
                                                            <div class="col-lg-6 text-right">
                                                                <div class="pagination-panel">
                                                                    <ul class="pagination pagination-sm man">
                                                                        <li><a href="#">&laquo;</a></li>
                                                                        <li><a href="#">1</a></li>
                                                                        <li><a href="#">2</a></li>
                                                                        <li><a href="#">3</a></li>
                                                                        <li><a href="#">4</a></li>
                                                                        <li><a href="#">5</a></li>
                                                                        <li><a href="#">&raquo;</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT--><!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
            </div>
            <!--END FOOTER--></div>
        <!--END PAGE WRAPPER--></div>
</div>
<script src="{{asset('public/backend/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('public/backend/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('public/backend/js/jquery-ui.js')}}"></script>
<!--loading bootstrap js-->
<script src="{{asset('public/backend/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{asset('public/backend/js/html5shiv.js')}}"></script>
<script src="{{asset('public/backend/js/respond.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('public/backend/vendors/slimScroll/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/vendors/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('public/backend/vendors/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/iCheck/custom.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/jquery-news-ticker/jquery.news-ticker.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.menu.js')}}"></script>
<script src="{{asset('public/backend/vendors/jquery-pace/pace.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/holder/holder.js')}}"></script>
<script src="{{asset('public/backend/vendors/responsive-tabs/responsive-tabs.js')}}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="undefined"></script>
<!--CORE JAVASCRIPT-->
<script src="{{asset('public/backend/js/main.js')}}"></script>
<script>(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-145464-12', 'auto');
ga('send', 'pageview');


</script>
</body>
</html>