<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/web/img/favicon.png" type="image/png">
</head>

<body>
<?php $this->beginBody() ?>
<!-- push menu-->
<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="icon-close f-20"></i></span>
        <div class="clearfix"></div>
        <ul class="nav-home5 js-menubar">
            <li class="level1 active dropdown"><a href="#">Home</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="home1.html" title="">Demo 1</a></li>
                    <li class="level2"><a href="home2.html" title="">Demo 2</a></li>
                    <li class="level2"><a href="home3.html" title="">Demo 3</a></li>
                    <li class="level2"><a href="home4.html" title="">Demo 4</a></li>
                    <li class="level2"><a href="home5.html" title="">Demo 5</a></li>
                    <li class="level2"><a href="#" title="">Demo 6</a></li>
                </ul>
            </li>
            <li class="level1 active dropdown"><a href="#">Shop</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">
                            <a href="#">Shop Layout</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="shop_full.html" title="">shop Full Width</a></li>
                                <li class="level3"><a href="shopgrid_v1.html" title="">Shop Grid v.1</a></li>
                                <li class="level3"><a href="shopgrid_v2.html" title="">Shop Grid v.2</a></li>
                                <li class="level3"><a href="shoplist.html" title="">Shop List</a></li>
                                <li class="level3"><a href="shopleft_sidebar.html" title="">Shop Left Sidebar</a></li>
                                <li class="level3"><a href="shopright_sidebar.html" title="">Shop Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Categories</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a></li>
                                <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a>
                                </li>
                                <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right
                                        Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="bundle.html" title="">Bundle</a></li>
                                <li class="level3"><a href="pin_product.html" title="">Pin Product</a></li>
                                <li class="level3"><a href="360degree.html" title="">360 Degree</a></li>
                                <li class="level3"><a href="feature_video.html" title="">Featued video</a></li>
                                <li class="level3"><a href="simple.html">Simple</a></li>
                                <li class="level3"><a href="variable.html">Variable</a></li>
                                <li class="level3"><a href="affilate.html">External / Affiliate</a></li>
                                <li class="level3"><a href="grouped.html">Grouped</a></li>
                                <li class="level3"><a href="outofstock.html">Out of stock</a></li>
                                <li class="level3"><a href="onsale.html">On sale</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Layout</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="product_extended.html" title="">Product Extended</a></li>
                                <li class="level3"><a href="product_sidebar.html" title="">Product Left Sidebar</a></li>
                                <li class="level3"><a href="product_right_sidebar.html" title="">Product Right
                                        Sideba</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Other Pages</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="shop_full.html" title="">Shop</a></li>
                                <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                <li class="level3"><a href="track.html" title="">Track Your Order</a></li>
                                <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="level1 active dropdown"><a href="#">Mega Menu</a></li>
            <li class="level1">
                <a href="#">Pages</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                    <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                    <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                    <li class="level2"><a href="404.html" title="404">404</a></li>
                    <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                </ul>
            </li>
            <li class="level1">
                <a href="#">Blog</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="blog-standar.html" title="Blog Standar">Blog Standar</a></li>
                    <li class="level2"><a href="blog_grid.html" title="Blog Gird">Blog Gird</a></li>
                    <li class="level2"><a href="blog-standar.html" title="Blog Sidebar">Blog Sidebar</a></li>
                    <li class="level2"><a href="blog-single-post.html" title="Blog Single Post">Blog Single Post</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end push menu-->
<div class="wrappage">
    <header id="header" class="header-v1">
        <div class="header-top-banner">
            <a href="#"><img src="/web/img/banner-top.jpg" alt="" class="img-reponsive"></a>
        </div>
        <div class="topbar">
            <div class="container container-240">
                <div class="row flex">
                    <div class="col-md-6 col-sm-6 col-xs-4 flex-left">
                        <div class="topbar-left">
                            <div class="element element-store hidden-xs hidden-sm">
                                <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img src="/web/img/icon-map.png" alt="">
                                    <span>Store Location</span>

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label1">
                                    <li><a href="#">New York</a></li>
                                    <li><a href="#">California</a></li>
                                    <li><a href="#">Los Angeles</a></li>
                                </ul>
                            </div>
                            <div class="element hidden-xs hidden-sm">
                                <a href="#"><img src="/web/img/icon-track.png" alt=""><span>Track Your Order</span></a>
                            </div>
                            <div class="element element-account hidden-md hidden-lg">
                                <a href="#">My Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-8 flex-right">
                        <div class="topbar-right">
                            <div class="element hidden-xs hidden-sm">
                                <a href="#">Buyer Protection </a>
                            </div>
                            <div class="element hidden-xs hidden-sm">
                                <a href="#">Help</a>
                            </div>
                            <div class="element hidden-xs hidden-sm">
                                <a href="#"><img src="/web/img/icon-phone.png" alt=""><span>Save big on our app!</span></a>
                            </div>
                            <div class="element element-leaguage">
                                <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img src="/web/img/icon-l.png" alt="">
                                    <span>English</span>
                                    <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label2">
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">DE</a></li>
                                    <li><a href="#">FR</a></li>
                                </ul>
                            </div>
                            <div class="element element-currency">
                                <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">

                                    <span>USD</span>
                                    <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label3">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">AUD</a></li>
                                    <li><a href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-center">
            <div class="container container-240">
                <div class="row flex">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                        <a href="/"><img src="/web/img/logo.png" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                        <form method="get" class="searchform ajax-search" action="/search" role="search" style="display: inline-block">
                            <input type="hidden" name="type" value="product">
                            <input type="text" name="q" class="form-control" placeholder="i’m shoping for..." style="border-radius: 50px; width: 100%;">
                            <span class="input-group-btn">
                                <button class="button_search" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </span>
                        </form>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                        <div class="right-panel">
                            <div class="header-sub-element hidden-xs hidden-sm">
                                <div class="sub-left">
                                    <img src="/web/img/icon-call.png" alt="">
                                </div>
                                <div class="sub-right">
                                    <span>Call Us Free</span>
                                    <div class="phone">(+123) 456 789</div>
                                </div>
                            </div>
                            <div class="header-sub-element row">
                                <a class="hidden-xs hidden-sm" href=""><img src="/web/img/icon-user.png" alt=""></a>
                                <div class="cart">
                                    <a href="#" class="dropdown-toggle" id="open-cart-modal">
                                        <img src="/web/img/icon-cart.png" alt="">
                                        <span class="count cart-count">0</span>
                                    </a>
                                </div>
                                <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                    <i class="fa fa-bars f-15"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-xs hidden-sm">
            <div class="container container-240">
                <div class="row flex lr2">
                    <div class="col-lg-3 widget-verticalmenu">
                        <div class="vertical-wrapper">
                            <?= $this->render('//layouts/inc/menu') ?>
                        </div>
                    </div>
                    <div class="col-lg-9 widget-left">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <?= $content ?>
    <!-- / end content -->
    <footer>
        <div class="f-top">
            <div class="container container-240">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-block footer-about">
                            <div class="f-logo">
                                <a href="#"><img src="/web/img/logo.png" alt="" class="img-reponsive"></a>
                            </div>
                            <ul class="footer-block-content">
                                <li class="address">
                                    <span>45 Grand Central Terminal New York,NY 1017 United State USA</span>
                                </li>
                                <li class="phone">
                                    <span>(+123) 456 789 - (+123) 666 888</span>
                                </li>
                                <li class="email">
                                    <span>Contact@yourcompany.com</span>
                                </li>
                                <li class="time">
                                    <span>Mon-Sat 9:00pm - 5:00pm  &nbsp;&nbsp;&nbsp;  Sun : Closed</span>
                                </li>
                            </ul>
                            <div class="footer-social social">
                                <h3 class="footer-block-title">Follow us</h3>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-dribbble"></a>
                                <a href="#" class="fa fa-behance"></a>
                                <a href="#" class="fa fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Quick menu</h3>
                            <ul class="footer-block-content">
                                <li><a href="#">TV & Video</a></li>
                                <li><a href="#">Home Audio & Theater</a></li>
                                <li><a href="#">Camera, Photo & Video</a></li>
                                <li><a href="#">Cell Phones & Accessories</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Video Games</a></li>
                                <li><a href="#">Bluetooth & Wireless Speakers</a></li>
                                <li><a href="#">Car Electronics</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Customer Service</h3>
                            <ul class="footer-block-content">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Track your Order</a></li>
                                <li><a href="#">Returns/Exchange</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Customer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="footer-block">
                            <div class="footer-block-phone">
                                <h3 class="footer-block-title">Hot Line</h3>
                                <p class="phone-desc">Call Us toll Free</p>
                                <p class="phone-light">(+123) 456 789 or (+123) 666 888</p>
                            </div>
                            <div class="footer-block-newsletter">
                                <h3 class="footer-block-title">Subscription</h3>
                                <p>Register now to get updates on promotions and coupons.</p>
                                <form class="form_newsletter" action="#" method="post">
                                    <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL"
                                           id="mail" class="newsletter-input form-control">
                                    <button id="subscribe" class="button_mini btn btn-gradient" type="submit">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-bottom">
            <div class="container container-240">
                <div class="row flex lr">
                    <div class="col-xs-6 f-copyright"><span>© 2010-2018 EngoTheme. All rights reserved.</span></div>
                    <div class="col-xs-6 f-payment hidden-xs">
                        <a href="#"><img src="/web/img/payment/mastercard.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="/web/img/payment/paypal.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="/web/img/payment/visa.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="/web/img/payment/american-express.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="/web/img/payment/western-union.png" alt="" class="img-reponsive"></a>
                        <a href="#"><img src="/web/img/payment/jcb.png" alt="" class="img-reponsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding: 15px;">
                    <div class="shopping-cart">
                        <table class="table cart-table">
                            <tbody id="cart-body">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- /footer -->
    <!-- /footer -->
</div>
<a href="#" class="btn-gradient scroll_top"><i class="ion-ios-arrow-up"></i></a>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
