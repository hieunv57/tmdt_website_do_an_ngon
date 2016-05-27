<!DOCTYPE html>
<html lang="en">
@include('backend.include.head')
<body class="sidebar-icons">
<div><!--BEGIN THEME SETTING-->
    <!--END THEME SETTING-->
    @include('backend.include.top')
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
       @include('backend.include.slidebar')
        <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Trang quản lý của Sfood</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
           <div class="page-content">
                <div id="tab-general">
                    <div id="sum_box" class="row mbl">
                        <div class="col-sm-6 col-md-3">
                            <div class="panel profit db mbm">
                                <div class="panel-body"><p class="icon"><i class="icon fa fa-group"></i></p><h4 class="value"><span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0"></span><span>$</span></h4>

                                    <a href="{{asset('admin/thanh-vien/danh-sach')}}"><p class="description">Danh sách thành viên</p></a>

                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success"><span class="sr-only">80% Complete (success)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel income db mbm">
                                <div class="panel-body"><p class="icon"><i class="fa fa-bars"></i></p><h4 class="value"><span>215</span><span>$</span></h4>

                                    <a href="{{asset('admin/danh-muc/danh-sach')}}"><p class="description">Danh sách danh mục</p></a>

                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-info"><span class="sr-only">60% Complete (success)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel task db mbm">
                                <div class="panel-body"><p class="icon"><i class="fa fa-map-marker"></i></p><h4 class="value"><span>215</span></h4>

                                    <a href="{{asset('admin/dia-diem/danh-sach')}}"><p class="description">Danh sách địa điểm</p></a>
                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-danger"><span class="sr-only">50% Complete (success)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel visit db mbm">
                                <div class="panel-body"><p class="icon"><i class="fa fa-newspaper-o"></i></p><h4 class="value"><span>128</span></h4>

                                    <a href="{{asset('admin/tin-tuc/danh-sach')}}"><p class="description">Danh sách tin bài</p></a>

                                    <div class="progress progress-sm mbn">
                                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar progress-bar-warning"><span class="sr-only">70% Complete (success)</span></div>
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
<script src="{{asset('public/backend/vendors/jplist/html/js/vendor/modernizr.min.js')}}"></script>
<script src="{{asset('public/backend/vendors/jplist/html/js/jplist.min.js')}}"></script>
<script src="{{asset('public/backend/js/jplist.js')}}"></script>
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