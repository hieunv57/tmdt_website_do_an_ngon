<!DOCTYPE html>
<html lang="en">
@include('backend.include.head')
<body class="sidebar-icons">
<div><!--BEGIN THEME SETTING-->
    <!--END THEME SETTING--><!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    @include('backend.include.top')
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        @include('backend.include.slidebar')
        <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Thêm mới thành viên</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div id="form-layouts" class="row">
                    <div class="col-lg-12">
                        <div style="background: transparent; border: 0; box-shadow: none !important" class="tab-content pan mtl mbn responsive">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-blue">
                                            <div class="panel-heading">Form thêm mới</div>
                                            <div class="panel-body pan">
                                                <form action="{{asset('admin/thanh-vien/them-moi')}}" method="POST" class="form-horizontal form-bordered">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-body">
                                                        <div class="form-group"><label for="inputLastName" class="col-md-3 control-label">Tên<span class='require'>*</span></label>

                                                            <div class="col-md-4">
                                                                <div class="input-icon right"><input id="inputLastName" name="name" type="text" required placeholder="Last Name" class="form-control"/></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label for="inputEmail" class="col-md-3 control-label">Email <span class='require'>*</span></label>

                                                            <div class="col-md-4">
                                                                <div class="input-icon"><i class="fa fa-envelope"></i><input name="email"  required type="email" placeholder="Địa chỉ  email" class="form-control"/></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label class="col-md-3 control-label">Mật khẩu</label>

                                                            <div class="col-md-4">
                                                                <div class="input-icon right"><input  name="password" required type="password" placeholder="" class="form-control"/></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label for="inputAddress1" class="col-md-3 control-label">Xác nhận mật khẩu<span class='require'>*</span></label>

                                                            <div class="col-md-4"><input name="password_confirmation" id="inputAddress1" required type="password" placeholder="" class="form-control"/></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions text-right pal">
                                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                                                        &nbsp;
                                                        <button type="button" class="btn btn-green">Hủy</button>
                                                    </div>
                                                </form>
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
<!--LOADING SCRIPTS FOR PAGE--><!--CORE JAVASCRIPT-->
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