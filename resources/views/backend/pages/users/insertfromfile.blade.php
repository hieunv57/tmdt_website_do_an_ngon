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
        <!--END SIDEBAR MENU--><!--BEGIN CHAT FORM-->
     <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Thêm mới thành viên từ file</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="fileupload" action="{{asset('admin/thanh-vien/them-moi-tu-file')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"/></noscript>
                            <!--The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload-->
                            <div class="row fileupload-buttonbar">
                                <div class="col-lg-7">
                                     <div class="input-group">
                                        <input type="file" name="file" required class="form-control"/>
                                        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Thêm mới</button></span>
                                     </div>
                                </div>
                            </div>
                        </form>
                        <!--The blueimp Gallery widget-->
                        <div id="blueimp-gallery" data-filter=":even" class="blueimp-gallery blueimp-gallery-controls">
                            <div class="slides"></div>
                            <h3 class="title"></h3><a class="prev">‹</a><a class="next">›</a><a class="close"></a><a class="play-pause"></a>
                            <ol class="indicator"></ol>
                        </div>
                        <!-- The template to display files available for upload-->
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
<script src="asset('public/backend/js/jquery-1.10.2.min.js')}}"></script>
<script src="asset('public/backend/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="asset('public/backend/js/jquery-ui.js')}}"></script>
<!--loading bootstrap js-->
<script src="asset('public/backend/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="asset('public/backend/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
<script src="asset('public/backend/js/html5shiv.js')}}"></script>
<script src="asset('public/backend/js/respond.min.js')}}"></script>
<script src="asset('public/backend/vendors/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="asset('public/backend/vendors/slimScroll/jquery.slimscroll.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="asset('public/backend/vendors/iCheck/icheck.min.js')}}"></script>
<script src="asset('public/backend/vendors/iCheck/custom.min.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-news-ticker/jquery.news-ticker.js')}}"></script>
<script src="asset('public/backend/js/jquery.menu.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-pace/pace.min.js')}}"></script>
<script src="asset('public/backend/vendors/holder/holder.js')}}"></script>
<script src="asset('public/backend/vendors/responsive-tabs/responsive-tabs.js')}}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="asset('public/backend/vendors/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/vendor/tmpl.min.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/vendor/load-image.min.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/vendor/jquery.blueimp-gallery.min.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.iframe-transport.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.fileupload.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.fileupload-process.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.fileupload-image.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.fileupload-audio.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.fileupload-video.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.fileupload-validate.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/jquery.fileupload-ui.js')}}"></script>
<script src="asset('public/backend/vendors/jquery-file-upload/js/cors/jquery.xdr-transport.js')}}"></script>
<script src="asset('public/backend/js/form-multiple-file-upload.js')}}"></script>
<!--CORE JAVASCRIPT-->
<script src="asset('public/backend/js/main.js')}}"></script>
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
})(window, document, 'script', '//www.google-analytics.com/analytics.js')}}', 'ga');
ga('create', 'UA-145464-12', 'auto');
ga('send', 'pageview');


</script>
</body>
</html>