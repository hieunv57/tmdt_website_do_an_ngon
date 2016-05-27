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
                    <div class="page-title">Thông tin địa điểm</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12"><h2>Thông tin địa điểm</h2>
                    
                    <form action="{{url('admin/dia-diem/cap-nhat/'.$place->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <input name="_method" value="PATCH" type="hidden">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row mtl">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="text-center mbl"><img src="{{asset('public/backend/images/places/'. $place->image)}}"  alt="" class="img-responsive"/></div>
                                    <div class="text-center mbl">
                                        <input type="file" name="Images" class="form-control" value="">  
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <td>Tên</td>
                                        <td>{{$place->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>{{$place->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Số lượt xem</td>
                                        <td>{{$place->view}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tham gia ngày</td>
                                        <td>{{$place->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-edit" data-toggle="tab">Cập nhật thông tin</a></li>
                                </ul>
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-edit" class="tab-pane fade in active">
                                        <form action="{{url('admin/thanh-vien/cap-nhat/'.$place->id)}}" method="POST" class="form-horizontal">
                                        <input name="_method" value="PATCH" type="hidden">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-group"><label class="col-sm-3 control-label">Tên địa điểm</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" name="name" value="{{$place->name}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                           <!--  <div class="form-group"><label class="col-sm-3 control-label">Danh mục</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><select name="category" class="form-control">
                                                                                <option value="">Chọn danh mục</option>
                                                                                <?php cate_parent($parent); ?>
                                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="form-group"><label class="col-sm-3 control-label">Địa chỉ</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="text" name="address" value="{{$place->address}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Số điện thoại</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input type="number" name="phone" value="{{$place->phone}}" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="form-group"><label class="col-sm-3 control-label">Giá thành</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input  name="price" value="{{$place->price}}" type="text" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group"><label class="col-sm-3 control-label">Thời gian mở cửa</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input  name="timeopen" value="{{$place->timeopen}}" type="text" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="form-group"><label class="col-sm-3 control-label">Video giới thiệu</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input  name="video" value="{{$place->video}}" type="text" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-group"><label class="col-sm-3 control-label">Mô tả địa điểm</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9">
                                                        <textarea rows="5" id="editor1" name="description"class="form-control">
                                                            <?php
                                                                echo $place->description;
                                                            ?>
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <button type="submit" class="btn btn-green btn-block">Cập nhật</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
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