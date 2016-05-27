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
                    <div class="page-title">Danh mục địa điểm</div>
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
                                     @if(Session::has('flash_message'))
                                        <div class="alert alert-{!! Session::get('flash_level') !!}">
                                            {!! Session::get('flash_message') !!}
                                        </div>
                                    @endif
                                        <div class="table-container">
                                            <table class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                                <thead>
                                                <tr>
                                                    <th>Tên</th>
                                                   <!--  <th>ID cha </th> -->
                                                    <th>Mô tả</th>
                                                    <th colspan="3">Action</span>
                                                </tr>
                                                <tbody>
                                               <?php
                                                    function xac_dinh_cha($id_cha){
                                                        $check= DB::select("SELECT count(*) FROM category WHERE parent_id='$id_cha'");
                                                        if(count($check) > 0){
                                                            return "co";
                                                        }else{
                                                            return "khong";
                                                        }
                                                    }
                                                    function de_quy_menu($id_cha){
                                                        $sql= DB::select("SELECT * FROM category WHERE parent_id='$id_cha'");       
                                                        foreach ($sql as $cat){         
                                                            echo "<tr>";
                                                            $arr= "<td>";
                                                            for($i=0; $i<$cat->level-1;$i++){
                                                                $arr .='--------';
                                                            }
                                                            $arr .=' '.$cat->name.'</td>';
                                                            $url='xoa/' .$cat->id;
                                                            $update='cap-nhat/'.$cat->id;
                                                            echo $arr;
                                                            // echo "<td>".$cat->parent_id."</td>";
                                                            echo "<td>".$cat->description."</td>";
                                                            echo "<td><a class='btn btn-warning' href='$update'>Cập nhật</a></td>";
                                                            echo "<td><a class='btn btn-danger' href='$url'>Xóa</a></td>";
                                                            $xac_dinh_cha= xac_dinh_cha($cat->id);
                                                            if($xac_dinh_cha=="co"){          
                                                                de_quy_menu($cat->id);          
                                                            }
                                                            echo "</tr>";
                                                        }
                                                    }
                                                // show   
                                                    echo "<tbody>";
                                                    $sql= DB::select("SELECT * FROM category WHERE parent_id='0'");       
                                                    foreach ($sql as $cat){       
                                                        $update='cap-nhat/'.$cat->id;
                                                        echo "<tr>";
                                                        echo "<td>".$cat->name."</td>";
                                                        // echo "<td>".$cat->parent_id."</td>";
                                                        echo "<td>".$cat->name."</td>";
                                                        echo "<td><a class='btn btn-warning' href='$update'>Cập nhật</a></td>";
                                                        $xac_dinh_cha= xac_dinh_cha($cat->id);
                                                        if($xac_dinh_cha=="co"){          
                                                            de_quy_menu($cat->id);          
                                                        }
                                                        echo "</tr>";
                                                    }    
                                                    echo "</tbody>";      
                                                    ?>
                                                </tbody>
                                                </thead>
                                                </table>
                                                <div class="row">
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


</script><script>
    $("div.alert").delay(3000).slideUp();
</script>
</body>
</html>