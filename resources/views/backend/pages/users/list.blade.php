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
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Danh sách thành viên</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div id="table-action" class="row">
                    <div class="col-lg-12">
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="table-table-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-container">
                                            <div class="row mbl">
                                                <div class="col-lg-6">
                                                <form action="{{asset('admin/thanh-vien/tim-kiem')}}" method="POST" accept-charset="utf-8">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group ">
                                                        <input type="text" placeholder="Nhập từ khóa và ấn enter" name="search" class="form-control"/>
                                                    </div>
                                                </form>
                                                </div>
                                                 <div class="actions"><a href="{{asset('admin/thanh-vien/them-moi')}}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>&nbsp;Thêm mới</a>&nbsp;
                                                </div>
                                            </div>
                                            <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                                <thead>
                                                <tr>
                                                    <th width="3%">ID</th>
                                                    <th width="7%">Tên</th>
                                                    <th width="10%">Email</th>
                                                    <th width="10%">Địa chỉ</th>
                                                    <th width="7%">Số điện thoại</th>
                                                    <th width="12%">Địa chỉ facebook</th>
                                                    <th width="10%">Giới tính</th>
                                                    <th width="9%">Trạng thái</th>
                                                    <th width="12%">Hành động</th>
                                                </tr>
                                                <tbody>
                                                @foreach($user as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->address}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->facebook}}</td>
                                                    <td>{{$item->gender}}</td>
                                                    <td>{{$item->status}}</td>
                                                    <td>
                                                    @if($item->role_id==1)
                                                    <a href="{{url('admin/thanh-vien/xem/'.$item->id)}}">
                                                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                                                            Xem
                                                        </button>
                                                    </a>
                                                    @else
                                                    <a href="{{url('admin/thanh-vien/xem/'.$item->id)}}">
                                                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;
                                                            Xem
                                                        </button>
                                                    </a>
                                                    <a href="{{url('admin/thanh-vien/xoa/'.$item->id)}}" onclick="return confirm('Bạn có chắc chắn xóa người dùng này ?')">
                                                        <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;
                                                            Xóa
                                                        </button>
                                                    </a>
                                                    @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                </thead></table>
                                                <div class="row">
                                                <div class="col-lg-6">
             
                                                </div>
                                                <div class="col-lg-6 text-right">
                                                    <div class="pagination-panel">
                                                        <ul class="pagination pagination-sm man">
                                                            {!!$user -> render()!!}
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
<script src="{{asset('public/backend/js/table-action.js')}}"></script>
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