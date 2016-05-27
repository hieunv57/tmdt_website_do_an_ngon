  <footer>
  <div class="b-footer-primary">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-8 col-xs-12">
                <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                    <i class="fa fa-chevron-up"></i>
                </div>
                <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                 <?php
                        $cate_cha=DB::table('category')->where('level','=','1')->get();
                    ?>
                    <ul>
                        <li><a href="{{asset('/')}}">Trang chủ</a></li>
                        @foreach($cate_cha as $item)
                        <li class="is-active-bottom-nav"><a href="{{$item->link}}">{{$item->name}}</a></li>
                       @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="b-footer-secondary row">
      <div class="col-md-3 col-sm-12 col-xs-12 f-center b-footer-logo-containter">
          <a href=""><img data-retina class="b-footer-logo color-theme" src="{{asset('public/fontend/img/logo2.png')}}" style="height:51px; width:140px"  alt="Logo"/></a>
          <div class="b-footer-logo-text f-footer-logo-text">
          <p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio.</p>
          <div class="b-btn-group-hor f-btn-group-hor">
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-dribbble"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-behance"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">Latest blog posts</h4>
        <div class="b-blog-short-post row">
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="blog_detail_left_slidebar.html">Amazing post with all the goodies</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              March 23, 2013
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="blog_detail_left_slidebar.html">Amazing post with all the goodies</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              March 23, 2013
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="blog_detail_left_slidebar.html">Amazing post with all the goodies</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              March 23, 2013
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">Thông tin liên hệ</h4>
        <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text">
              Food5<br/>
                144 Xuân Thủy - Cầu Giấy - Hà Nội<br/>
                <br/>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
              <i class="fa fa-skype"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                Skype: Food5
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="mailto:frexystudio@gmail.com">ngohieuk57@gmail.com</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</footer>