<!DOCTYPE html>
<html>
@include('fontend.include.head')
<body>
    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
@include('fontend.include.header')
<div class="j-menu-container"></div>

    <div class="l-main-container">

        <div class="b-breadcrumbs f-breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#">Shopping</a></li>
                    <li><i class="fa fa-angle-right"></i><span> Detail</span></li>
                </ul>
            </div>
        </div>

        <section class="b-infoblock">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ">
                        <div class="b-shortcode-example">
                            <div class=" f-primary-b b-title-b-hr f-title-b-hr b-null-top-indent">Duis id nulla id enim sodales</div>
                            <div class="b-product-card b-default-top-indent">
                                <div class="b-product-card__visual-wrap">
                                    <div class="flexslider b-product-card__visual flexslider-zoom">
                                        <ul class="slides">
                                            <li>
                                                <img src="img/shop/shop_1.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_2.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_3.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_4.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_3.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_4.png" />
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flexslider flexslider-thumbnail b-product-card__visual-thumb carousel-sm">
                                        <ul class="slides">
                                            <li>
                                                <img src="img/shop/shop_1_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_2_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_3_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_4_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_3_sm.png" />
                                            </li>
                                            <li>
                                                <img src="img/shop/shop_4_sm.png" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="b-product-card__info">
                                    <h4 class="f-primary-b b-h4-special f-h4-special">information</h4>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Price</div>
                                        <span class="f-product-card__info_price c-default f-primary-b">$ 129  </span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Reviews</div>
                                        <div class="b-stars-group f-stars-group b-margin-right-standard">
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star is-active-stars"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="f-primary-b c-tertiary f-title-smallest"> <a href="#">(12 reviews)</a></span>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_description f-product-card__info_description">
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_count">
                                            <input type="number" min="1" class="form-control form-control--secondary" placeholder="1">
                                        </div>
                                        <div class="b-product-card__info_add b-margin-right-standard">
                                            <div class=" b-btn f-btn b-btn-sm-md f-btn-sm-md">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                        <div class="b-product-card__info_like  b-btn f-btn b-btn-sm-md f-btn-sm-md b-btn--icon-only">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_code">
                                            <input type="text" class="form-control form-control--secondary" placeholder="Enter your coupon code">
                                        </div>
                                        <div class="b-product-card__info_submit  b-btn f-btn b-btn-sm-md f-btn-sm-md b-btn--icon-only">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Categories</div>
                                        <a class="f-more f-title-smallest" href="">Dress</a>, <a class="f-more f-title-smallest" href="">Lorem</a>
                                    </div>
                                    <div class="b-product-card__info_row">
                                        <div class="b-product-card__info_title f-primary-b f-title-smallest">Tags</div>
                                        <div class="b-tag-container">
                                            <a class="f-tag b-tag" href="">Dress</a>
                                        </div>
                                    </div>
                                    <div class="b-product-card__info_row">
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
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="b-shortcode-example">
                            <div class="b-tabs f-tabs j-tabs b-tabs-reset">
                                <ul>
                                    <li><a href="#tabs-21">Description</a></li>
                                    <li><a href="#tabs-22">Previews</a></li>
                                </ul>
                                <div class="b-tabs__content">
                                    <div id="tabs-21">
                                        <h4 class="f-tabs-vertical__title f-primary-b">Product description</h4>
                                        <p>Maecenas laoreet commodo arcu, eu semper lacus tincidunt eget. Vestibulum at arcu pulvinar, fermentum sapien nec, tristique dui. Ut feugiat est at sapien ullamcorper viverra. Vestibulum pretium malesuada elit rutrum condimentum. Donec bibendum scelerisque odio vulputate viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames acipsum. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. .</p>
                                        <a href="#" class="f-more f-primary-b f-title-smallest">Read more...</a>
                                    </div>
                                    <div id="tabs-22">
                                        <h4 class="f-tabs-vertical__title f-primary-b">Suspendisse vitae metus enim 2</h4>
                                        <p>Maecenas laoreet commodo arcu, eu semper lacus tincidunt eget. Vestibulum at arcu pulvinar, fermentum sapien nec, tristique dui. Ut feugiat est at sapien ullamcorper viverra. Vestibulum pretium malesuada elit rutrum condimentum. Donec bibendum scelerisque odio vulputate viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames acipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod purus eu sapien faucibus, quis porta ipsum accumsan.</p>
                                        <a href="#" class="f-more f-primary-b f-title-smallest">Read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="f-primary-b b-h4-special f-h4-special">product related</h4>
                            <div class="row">
                                <div class="b-col-default-indent">
                                    <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                        <div class="b-product-preview">
    <div class="b-product-preview__img view view-sixth">
    <img data-retina src="img/shop/shop_1.png" alt=""/>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-product-preview__content">
        <div class="b-product-preview__content_col">
            <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
        </div>
        <div class="b-product-preview__content_col">
            <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
            <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
        </div>
    </div>
</div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                        <div class="b-product-preview">
    <div class="b-product-preview__img view view-sixth">
    <img data-retina src="img/shop/shop_2.png" alt=""/>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-product-preview__content">
        <div class="b-product-preview__content_col">
            <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
        </div>
        <div class="b-product-preview__content_col">
            <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
            <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
        </div>
    </div>
</div>
                                    </div>
                                    <div class="clearfix visible-xs-block"></div>
                                    <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                        <div class="b-product-preview">
    <div class="b-product-preview__img view view-sixth">
    <img data-retina src="img/shop/shop_3.png" alt=""/>
    <div class="b-item-hover-action f-center mask">
        <div class="b-item-hover-action__inner">
            <div class="b-item-hover-action__inner-btn_group">
                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
            </div>
        </div>
    </div>
</div>
    <div class="b-product-preview__content">
        <div class="b-product-preview__content_col">
            <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
        </div>
        <div class="b-product-preview__content_col">
            <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
            <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
        </div>
    </div>
</div>
                                    </div>
                                    <div class="clearfix hidden-xs"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <aside>
    <div class="row b-col-default-indent">
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">product price filter</h4>
            <form action="">
    <div class="b-slider-range j-slider-range f-slider-range">
        <span class="b-slider-range_min">0</span>
        <span class="b-slider-range_max">$999</span>
    </div>
    <a href="#" class="b-btn f-btn b-btn-sm f-btn-sm b-btn-default f-primary-b">Filter</a>
</form>
        </div>
        <div class="col-md-12">
            <div class="b-categories-filter">
                <h4 class="f-primary-b b-h4-special f-h4-special c-primary">Categories filter</h4>
                <ul>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Bikini</a>
        <span class="b-categories-filter_count f-categories-filter_count">12</span>
    </li>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Smart Phone</a>
        <span class="b-categories-filter_count f-categories-filter_count">23</span>
    </li>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Latop</a>
        <span class="b-categories-filter_count f-categories-filter_count">12</span>
    </li>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Apple Store</a>
        <span class="b-categories-filter_count f-categories-filter_count">23</span>
    </li>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Wordpress Theme</a>
        <span class="b-categories-filter_count f-categories-filter_count">12</span>
    </li>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Web Design</a>
        <span class="b-categories-filter_count f-categories-filter_count">23</span>
    </li>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Sport</a>
        <span class="b-categories-filter_count f-categories-filter_count">12</span>
    </li>
    <li>
        <a class="f-categories-filter_name" href="#"><i class="fa fa-plus"></i> Fashion</a>
        <span class="b-categories-filter_count f-categories-filter_count">23</span>
    </li>
</ul>
            </div>
        </div>
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">colors filter</h4>
            <div class="b-color-picker b-color-picker--alt">
    <div class="b-color-picker__box">
        <div class="b-color-picker_color_3"></div>
        <div class="b-color-picker_color_4"></div>
        <div class="b-color-picker_color_5 is-active"></div>
        <div class="b-color-picker_color_6"></div>
        <div class="b-color-picker_color_7"></div>
        <div class="b-color-picker_color_8"></div>
        <div class="b-color-picker_color_9"></div>
        <div class="b-color-picker_color_10"></div>
        <div class="b-color-picker_color_11"></div>
        <div class="b-color-picker_color_12"></div>
        <div class="b-color-picker_color_13"></div>
        <div class="b-color-picker_color_14"></div>
        <div class="b-color-picker_color_15"></div>
        <div class="b-color-picker_color_16"></div>
    </div>
</div>
        </div>
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">popular product</h4>
            <div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
    <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
        <div class="b-blog-short-post__item_img">
            <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
        </div>
        <div class="b-remaining">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Bodycon Dress in Animal </a>
            </div>
            <div class="f-blog-short-post__item_price  f-primary-b">
                $299.00
            </div>
        </div>
    </div>
</div>
<div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
    <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
        <div class="b-blog-short-post__item_img">
            <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
        </div>
        <div class="b-remaining">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Bodycon Dress in Animal </a>
            </div>
            <div class="f-blog-short-post__item_price  f-primary-b">
                $299.00
            </div>
        </div>
    </div>
</div>
<div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
    <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
        <div class="b-blog-short-post__item_img">
            <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
        </div>
        <div class="b-remaining">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Bodycon Dress in Animal </a>
            </div>
            <div class="f-blog-short-post__item_price  f-primary-b">
                $299.00
            </div>
        </div>
    </div>
</div>
<div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
    <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
        <div class="b-blog-short-post__item_img">
            <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
        </div>
        <div class="b-remaining">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Bodycon Dress in Animal </a>
            </div>
            <div class="f-blog-short-post__item_price  f-primary-b">
                $299.00
            </div>
        </div>
    </div>
</div>
<div class="b-blog-short-post b-blog-short-post--popular b-blog-short-post--w-img b-blog-short-post--img-hover-bordered f-blog-short-post--w-img row f-blog-short-post--popular">
    <div class="b-blog-short-post__item col-md-12 col-sm-6 col-xs-12">
        <div class="b-blog-short-post__item_img">
            <a href="#"><img data-retina src="img/shop/popular_1.png" alt=""/></a>
        </div>
        <div class="b-remaining">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="#">Bodycon Dress in Animal </a>
            </div>
            <div class="f-blog-short-post__item_price  f-primary-b">
                $299.00
            </div>
        </div>
    </div>
</div>
        </div>
        <div class="col-md-12">
            <h4 class="f-primary-b b-h4-special f-h4-special c-primary">colors filter</h4>
            <div>
    <a class="f-tag b-tag" href="#">Dress</a>
    <a class="f-tag b-tag" href="#">Mini</a>
    <a class="f-tag b-tag" href="#">Skate animal</a>
    <a class="f-tag b-tag" href="#">Lorem ipsum</a>
    <a class="f-tag b-tag" href="#">literature</a>
    <a class="f-tag b-tag" href="#">Baroque</a>
    <a class="f-tag b-tag" href="#">Dress</a>
    <a class="f-tag b-tag" href="#">Mini</a>
    <a class="f-tag b-tag" href="#">Skate animal</a>
    <a class="f-tag b-tag" href="#">Lorem ipsum</a>
    <a class="f-tag b-tag" href="#">literature</a>
    <a class="f-tag b-tag" href="#">Baroque</a>
</div>
        </div>
    </div>
</aside>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <footer>
  <div class="b-footer-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © 2014 - All Rights Reserved</div>
            <div class="col-sm-8 col-xs-12">
                <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                    <i class="fa fa-chevron-up"></i>
                </div>
                <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                    <ul>
                        <li><a href="../../html/homepage-1-index.html">Homepage</a></li>
                        <li class="is-active-bottom-nav"><a href="../../html/page_header_1.html">Headers</a></li>
                        <li><a href="../../html/portfolio_our_portfolio_1_colums.html">Portfolio</a></li>
                        <li><a href="../../html/our_blog_1_columns.html">Blog</a></li>
                        <li><a href="../../html/page_search_result.html">Pages</a></li>
                        <li><a href="../../html/shortcode_typography.html">Shortcode</a></li>
                        <li><a href="../../html/shop_listing_col.html">Shop</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="b-footer-secondary row">
      <div class="col-md-3 col-sm-12 col-xs-12 f-center b-footer-logo-containter">
          <a href=""><img data-retina class="b-footer-logo color-theme" src="img/logo-vertical-default.jpg" alt="Logo"/></a>
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
        <h4 class="f-primary-b">contact info</h4>
        <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text">
              Frexy Studio<br/>
                1234 Street Name, City Name,<br/>
                United States.<br/>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
              <i class="fa fa-skype"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                Skype: ask.company
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="mailto:frexystudio@gmail.com">mail@example.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12 ">
        <h4 class="f-primary-b">photo stream</h4>
          <div class="b-short-photo-items-group">
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_1.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_1.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_2.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_2.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_3.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_3.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_4.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_4.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_5.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_5.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_6.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_6.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_7.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_7.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_8.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_8.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-xs">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_9.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_9.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-sm hidden-xs">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_10.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_10.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-sm hidden-xs">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_11.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_11.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-sm hidden-xs">
        <a class="b-short-photo-item fancybox" href="img/gallery/big/gallery_12.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="img/gallery/sm/gallery_12.jpg" alt=""/></a>
    </div>
</div>
      </div>
    </div>
  </div>
</footer>
@include('fontend.include.script')

</body>
</html>