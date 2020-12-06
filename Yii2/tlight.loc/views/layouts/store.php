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
        <form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off"><input type="hidden" name="type" value="product"><button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form>
        <?= \app\components\MenuWidget::widget([
            'tpl' => 'menu',
            'ul_class' => 'vertical-group',
        ]) ?>

    </div>
</div>
<!-- end push menu-->
<div class="wrappage">
    <header id="header" class="header-v5">
        <div class="header-top-banner">
            <a href="#"><img src="/web/img/banner-top.jpg" alt="" class="img-reponsive"></a>
        </div>
        <div class="topbar">
            <div class="container container-240">
                <div class="row flex">
                    <div class="col-md-6 col-sm-6 col-xs-4 flex-left">
                        <div class="topbar-left">
                            <div class="element element-store hidden-xs hidden-sm">
                                <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                            <div class="element element-leaguage">
                                <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-center">
            <div class="container container-240">
                <div class="row flex">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">

                        <a href="#"><img src="/web/img/logo.png" alt="" class="img-reponsive"></a>

                    </div>
                    <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                        <form method="get" class="searchform ajax-search" action="/search" role="search">
                            <input type="hidden" name="type" value="product">
                            <input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="i’m shoping for...">
                            <ul class="list-product-search hidden-xs hidden-sm">
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="/web/img/product/iphonex.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="/web/img/product/sound.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Smartphone 6S 64GB LTE</h3>
                                    </a>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="/web/img/product/phone4.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="/web/img/product/phone5.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Smartphone 6S 64GB LTE </h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="/web/img/product/phone1.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                    </a>
                                </li>
                            </ul>
                            <div class="search-panel">
                                <a class="dropdown-toggle" data-toggle="dropdown" href='#'>All categories <span class="fa fa-caret-down"></span></a>
                                <ul id="category" class="dropdown-menu dropdown-category">
                                    <li><a href="#">TV & Video</a></li>
                                    <li><a href="#">Home Audio & Theater</a></li>
                                    <li><a href="#">Camera, Photo & Video</a></li>
                                    <li><a href="#">Cell Phones & Accessories</a></li>
                                    <li><a href="#">Headphones</a></li>
                                    <li><a href="#">Car Electronics</a></li>
                                    <li><a href="#">Electronics Showcase</a></li>
                                </ul>
                            </div>
                            <span class="input-group-btn">
                                          <button class="button_search" type="button"><i class="ion-ios-search-strong"></i></button>
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
                                    <div class="phone">(+123) 456 789 </div>
                                </div>
                            </div>
                            <div class="header-sub-element row">
                                <a class="hidden-xs hidden-sm" href=""><img src="/web/img/icon-user.png" alt=""></a>
                                <a href="#"><img src="/web/img/icon-heart.png" alt=""></a>
                                <div class="cart">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
                                        <img src="/web/img/icon-cart.png" alt="">
                                        <span class="count cart-count">0</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-cart">
                                        <ul class="mini-products-list">
                                            <li class="item-cart">
                                                <div class="product-img-wrap">
                                                    <a href="#"><img src="/web/img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="inner-left">
                                                        <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                        <div class="product-price">
                                                            $ 60.00 <span>( x2)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                            </li>
                                            <li class="item-cart">
                                                <div class="product-img-wrap">
                                                    <a href="#"><img src="/web/img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="inner-left">
                                                        <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                        <div class="product-price">
                                                            $ 60.00 <span>( x2)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                            </li>
                                        </ul>
                                        <div class="bottom-cart">
                                            <div class="cart-price">
                                                <span>Subtotal</span>
                                                <span class="price-total">$ 120.00</span>
                                            </div>
                                            <div class="button-cart">
                                                <a href="#" class="cart-btn btn-viewcart">View Cart</a>
                                                <a href="#" class="cart-btn e-checkout btn-gradient">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
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
                    <div class="col-lg-9 widget-left">
                        <div class="flex lr e-border">
                            <nav class="main-menu flex align-center">
                                <button type="button" class="icon-mobile e-icon-menu icon-pushmenu js-push-menu">
                                    <span class="navbar-toggler-bar"></span>
                                    <span class="navbar-toggler-bar"></span>
                                    <span class="navbar-toggler-bar"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <?= \app\components\StoreMenuWidget::widget([
                                        'tpl' => 'storemenu',
                                        'ul_class' => 'nav navbar-nav js-menubar',
                                        'seller_id' => $this->params['store']['seller_id']
                                    ]) ?>
                                </div>
                            </nav>
                            <div class="header-bottom-right hidden-xs hidden-sm">
                                <img src="/web/img/icon-ship.png" alt="" class="img-reponsive">
                                <span>Free Shipping on Orders $100</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!--content-->
    <?=$content?>
    <div class="feature">
        <div class="container container-240">
            <div class="feature-inside">
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="/web/img/feature/truck.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Worldwide Delivery</h3>
                        <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="/web/img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Safe Payment</h3>
                        <p>Pay with the world’s most popular and secure payment methods.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="/web/img/feature/safety.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Shop with Confidence</h3>
                        <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="/web/img/feature/telephone.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>24/7 Help Center</h3>
                        <p>Round-the-clock assistance for a smooth shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <input type="email" value="" placeholder="Enter your emaill adress" name="EMAIL" id="mail" class="newsletter-input form-control">
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
    <!-- /footer -->
    <!-- /footer -->
</div>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
