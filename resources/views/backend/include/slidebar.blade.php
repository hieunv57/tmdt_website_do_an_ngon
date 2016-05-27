        <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;" data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" alt="" class="img-circle"/></div>
                        <div class="info"><p>John Doe</p>
                            <ul class="list-inline list-unstyled">
                                <li><a href="extra-profile.html" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
                                <li><a href="email-inbox.html" data-hover="tooltip" title="Mail"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#" data-hover="tooltip" title="Setting" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a></li>
                                <li><a href="extra-signin.html" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li><a href="{{asset('admin')}}"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Trang Admin</span></a></li>
                    <li><a href="#"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Thành viên</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/thanh-vien/danh-sach')}}"><i class="fa fa-align-left"></i><span class="submenu-title">Danh sách</span></a></li>
                            <li><a href="{{asset('admin/thanh-vien/them-moi')}}"><i class="fa fa-angle-double-left"></i><span class="submenu-title">Thêm mới</span></a></li>
                            <li><a href="{{asset('admin/thanh-vien/them-moi-tu-file')}}"><i class="fa fa-angle-double-left"></i><span class="submenu-title">Thêm mới từ file</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Danh mục</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/danh-muc/danh-sach')}}"><i class="fa fa-briefcase"></i><span class="submenu-title">Danh sách</span></a></li>
                            <li><a href="{{asset('admin/danh-muc/them-moi')}}"><i class="fa fa-th-large"></i><span class="submenu-title">Thêm mới</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Địa điểm</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/dia-diem/danh-sach')}}"><i class="fa fa-columns"></i><span class="submenu-title">Danh sách</span></a></li>
                            <li><a href="{{asset('admin/dia-diem/them-moi')}}"><i class="fa fa-file-text-o"></i><span class="submenu-title">Thêm mới</span></a></li>
                             <li><a href="{{asset('admin/dia-diem/them-moi-tu-file')}}"><i class="fa fa-file-text-o"></i><span class="submenu-title">Thêm mới từ file</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Món ăn</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/mon-an/danh-sach')}}"><i class="fa fa-columns"></i><span class="submenu-title">Danh sách</span></a></li>
                            <li><a href="{{asset('admin/mon-an/them-moi')}}"><i class="fa fa-file-text-o"></i><span class="submenu-title">Thêm mới</span></a></li>
                             <li><a href="{{asset('admin/mon-an/them-moi-tu-file')}}"><i class="fa fa-file-text-o"></i><span class="submenu-title">Thêm mới từ file</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Tin tức</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{asset('admin/tin-tuc/danh-sach')}}"><i class="fa fa-th-large"></i><span class="submenu-title">Danh sách</span></a></li>
                            <li><a href="{{asset('admin/tin-tuc/them-moi')}}"><i class="fa fa-tablet"></i><span class="submenu-title">Thêm mới</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU--><!--BEGIN CHAT FORM-->