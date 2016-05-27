<header>
      <div class="b-top-options-panel b-top-options-panel--color">
          <div class="container">
          	@if(Auth::guest())
              <div class="b-option-contacts f-option-contacts">
                  <a href="{{asset('dang-ky')}}"><i class="fa fa-user-plus"></i>Đăng ký</a>
                  <a href="{{asset('dang-nhap')}}"><i class="fa fa-user"></i>Đăng nhập</a>
              </div>
              <div class="b-option-total-cart">
                  <div class="b-option-total-cart__goods">
                      <div id="clock" class="f-option-total-cart__numbers b-option-total-cart__numbers" style="color:white;"></div>
                  </div>
              </div>
             @else
             <div class="b-option-total-cart">
                  <div class="b-option-total-cart__goods">
                      <a href="#" class="f-option-total-cart__numbers b-option-total-cart__numbers"><i class="fa fa-hand-paper-o" aria-hidden="true"></i>Chào mừng {{ Auth::user()->name }}</a>
                      <div class="b-option-cart__items">
                          <div class="b-option-cart__items__title f-option-cart__items__title f-default-l">lựa chọn các mục</div>
                          <ul>
                              <li>
                                  <div class="b-option-cart__items__descr">
                                      <strong class="b-option-cart__descr__title f-option-cart__descr__title"><a href="{{asset('thong-tin-ca-nhan')}}">Thông tin cá nhân</a></strong>
                                      @if (Auth::user()->role_id=='1')
                                        <strong class="b-option-cart__descr__title f-option-cart__descr__title"><a href="{{asset('admin')}}">Trang quản lý website</a></strong>
                                      @endif
                                      <strong class="b-option-cart__descr__title f-option-cart__descr__title"><a href="{{asset('dang-dia-diem')}}">Đăng địa điểm</a></strong>
                                      <strong class="b-option-cart__descr__title f-option-cart__descr__title"><a href="{{asset('dang-mon-ngon')}}">Đăng món ngon</a></strong>
                                      <strong class="b-option-cart__descr__title f-option-cart__descr__title"><a href="{{asset('nguoi-dung/dia-diem-da-dang')}}">Quản lý địa điểm</a></strong>
                                      
                                  </div>
                              </li>
                              <li>
                                  <div class="b-option-cart__items__descr">
                                      <strong class="b-option-cart__descr__title f-default-b f-option-cart__descr__title"><a href="{{asset('dang-xuat')}}">Đăng xuất</a></strong>
                                  </div>
                                 
                              </li>
                          </ul>
                          
                      </div>
                  </div>
              </div>
              <div class="b-option-contacts f-option-contacts">

               <div id="clock" style="color:white;"></div>
             
            </div>
            @endif
            

          </div>
      </div>
      <div class="container b-header__box b-relative">
          <a href="{{asset('/')}}" class="b-left b-logo"><img class="color-theme" data-retina src="{{asset('public/fontend/img/logo2.png')}}" style="height:51px; width:140px" alt="Logo" /></a>
          <div class="b-header-r b-right">
              <div class="b-header-ico-group f-header-ico-group b-right">
              <form method="POST" action="{{asset('tag')}}" accept-charset="utf-8">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                          <span class="b-search-box">
                              <i class="fa fa-search"></i>
                              <input type="text" name="search" placeholder="Nhập từ khóa"/>
                          </span>
                          </form>
              </div>
              <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
              <nav class="b-top-nav f-top-nav b-right j-top-nav">
                  <ul class="b-top-nav__1level_wrap">
				    <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="{{asset('/')}}"><i class="fa fa-home b-menu-1level-ico"></i>Trang chủ <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
				        <div class="b-top-nav__dropdomn">
				            <ul class="b-top-nav__2level_wrap">
				                <li class="b-top-nav__2level_title f-top-nav__2level_title is-active-top-nav__2level-title">Trang chủ</li>
				                <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="homepage-1-index.html"><i class="fa fa-angle-right"></i>Trang chủ 1</a></li>
				                <li class="b-top-nav__2level f-top-nav__2level f-primary is-active-top-nav__2level"><a href="homepage-1_index_product_launch.html"><i class="fa fa-angle-right"></i>Trang chủ 2</a></li>
				            </ul>
				        </div>
				    </li>
				    <?php
                        $cate_cha=DB::table('category')->where('level','=','1')->get();
                    ?>
                    @foreach ($cate_cha as $cate)
				    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
				        <a href="{{asset('danh-muc/' .$cate->link)}}" class="b-top-nav__2level_title f-top-nav__2level_title">{{$cate->name}}<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
				        <div class="b-top-nav__dropdomn">
				            <ul class="b-top-nav__2level_wrap">
				                <li class="b-top-nav__2level_title f-top-nav__2level_title">{{$cate->name}}</li>
				                 <?php
                                    $cate_con=DB::table('category')->where('parent_id',$cate->id)->get();
                                 ?>
                                 @foreach ($cate_con as $cate_c)
				                <li class="b-top-nav__2level f-top-nav__2level f-primary"><h5><a href="{{asset('danh-muc/' .$cate_c->link)}}"><i class="fa fa-angle-right"></i>{{$cate_c->name}}</a></h5></li>
				               @endforeach
				            </ul>
				        </div>
				    </li>
				    @endforeach
              </nav>
          </div>
      </div>
  </header>