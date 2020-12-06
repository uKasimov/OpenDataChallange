<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="<?= Yii::$app->language ?>"><!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="images//favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<?php $this->beginBody() ?>
<div class="main-container">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div>
    <!-- Loader /- -->

    <!-- Header -->
    <header class="header-section container-fluid no-padding">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="col-md-7 col-sm-7 col-xs-7 dropdown-bar">
                    <h5>Welcome To Max Shop</h5>
<!--                    <div class="language-dropdown dropdown">-->
<!--                        <button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="languages" id="language" type="button" class="btn dropdown-toggle">English <span class="caret"></span></button>-->
<!--                        <ul class="dropdown-menu no-padding">-->
<!--                            <li><a title="Danish" href="#">Danish</a></li>-->
<!--                            <li><a title="German" href="#">German</a></li>-->
<!--                            <li><a title="French" href="#">French</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="language-dropdown dropdown">-->
<!--                        <button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="currency" id="currency" type="button" class="btn dropdown-toggle">US Dollar<span class="caret"></span></button>-->
<!--                        <ul class="dropdown-menu no-padding">-->
<!--                            <li><a title="Danish" href="#">Usd</a></li>-->
<!--                            <li><a title="German" href="#">Ora</a></li>-->
<!--                            <li><a title="French" href="#">Riyal</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
                <!-- Social -->
                <div class="col-md-5 col-sm-5 col-xs-5 header-social">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div><!-- Social /- -->
            </div><!-- Container /- -->
        </div><!-- Top Header /- -->

        <!-- Menu Block -->
        <div class="container-fluid no-padding menu-block">
            <!-- Container -->
            <div class="container">
                <!-- nav -->
                <nav class="navbar navbar-default ow-navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand">Max <span>shop</span></a>
                    </div>
                    <!-- Menu Icon -->
                    <div class="menu-icon">
                        <div class="search">
                            <a href="#" id="search" title="Search"><i class="icon icon-Search"></i></a>
                        </div>
                        <ul class="cart">
                            <li>
                                <a aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="cart" class="btn dropdown-toggle" title="Add To Cart" href="#"><i class="icon icon-ShoppingCart"></i></a>
                                <ul class="dropdown-menu no-padding">
                                    <li class="mini_cart_item">
                                        <a title="Remove this item" class="remove" href="#">&#215;</a>
                                        <a href="#" class="shop-thumbnail">
                                            <img alt="poster_2_up" class="attachment-shop_thumbnail" src="images/product-wishlist-1.jpg">Flying Ninja
                                        </a>
                                        <span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
                                    </li>
                                    <li class="mini_cart_item">
                                        <a title="Remove this item" class="remove" href="#">&#215;</a>
                                        <a href="#" class="shop-thumbnail">
                                            <img alt="poster_2_up" class="attachment-shop_thumbnail" src="images/product-wishlist-2.jpg">Flying Ninja
                                        </a>
                                        <span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
                                    </li>
                                    <li class="button">
                                        <a href="#" title="View Cart">View Cart</a>
                                        <a href="#" title="Check Out">Check out</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" title="Like"><i class="icon icon-Heart"></i></a></li>
                            <li><a href="#" title="User"><i class="icon icon-User"></i></a></li>
                        </ul>
                    </div><!-- Menu Icon /- -->
                    <div class="navbar-collapse collapse navbar-right" id="navbar">
                        <?= $this->render('//layouts/inc/menu') ?>
                    </div><!--/.nav-collapse -->
                </nav><!-- nav /- -->
                <!-- Search Box -->
                <div class="search-box">
                    <span><i class="icon_close"></i></span>
                    <form><input type="text" class="form-control" placeholder="Enter a keyword and press enter..." /></form>
                </div><!-- Search Box /- -->
            </div><!-- Container /- -->
        </div><!-- Menu Block /- -->
    </header><!-- Header /- -->

    <main>
        <?=$content?>
    </main>

    <!-- Footer Main -->
    <footer id="footer-main" class="footer-main container-fluid">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Widget About -->
                <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_about">
                    <a href="index.html" title="Max Shop">Max <span>Shop</span></a>
                    <div class="info">
                        <p><i class="icon icon-Pointer"></i>Max Shop, 65 Huge Street Melbourne, 2850 Australia.</p>
                        <p><i class="icon icon-Phone2"></i><a href="tel:(11)1234567890" title="Phone" class="phone">(11) 123 456 7890</a></p>
                        <p><i class="icon icon-Imbox"></i><a href="mailto:info@maxshop.com" title="info@maxshop.com">info@maxshop.com</a></p>
                    </div>
                </aside><!-- Widget About /- -->
                <!-- Widget Links -->
                <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links">
                    <h3 class="widget-title">Popular Links</h3>
                    <ul>
                        <li><a href="#product-section" title="Popular Products">Popular Products</a></li>
                        <li><a href="#selling" title="Best Selling">Best Selling</a></li>
                        <li><a href="about.html" title="About Us">About Us</a></li>
                        <li><a href="#dealing" title="Deal Of The Day">Deal Of The Day</a></li>
                        <li><a href="#collection" title="Product Collections">Product Collections</a></li>
                        <li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
                    </ul>
                </aside><!-- Widget Links /- -->
                <!-- Widget Account -->
                <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links widget_account">
                    <h3 class="widget-title">my account</h3>
                    <ul>
                        <li><a href="#" title="My Order Details">My Order Details</a></li>
                        <li><a href="#" title="My credit Offers">My credit Offers</a></li>
                        <li><a href="#" title="My addresses">My addresses</a></li>
                        <li><a href="#" title="My Personal Details">My Personal Details</a></li>
                        <li><a href="#" title="My Account Details">My Account Details</a></li>
                    </ul>
                </aside><!-- Widget Account /- -->
                <!-- Widget Newsletter -->
                <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_newsletter">
                    <h3 class="widget-title">newsletter</h3>
                    <div class="input-group">
                        <input class="form-control" placeholder="email address" type="text">
                        <span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-paper-plane-o"></i></button>
							</span>
                    </div>
                    <h5>Get New Updates From Our Collections</h5>
                    <h3 class="widget-title widget-title-1">Follow Us</h3>
                    <ul class="social">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </aside><!-- Widget Newsletter /- -->
            </div>
            <div class="copyright-section">
                <div class="coyright-content">
                    <p>&copy; Max shop. all rights reserved</p>
                </div>
                <ul>
                    <li><a href="#" title="Delivery Information">Delivery Information</a></li>
                    <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                    <li><a href="#" title="Terms & Condition">Terms & Condition</a></li>
                </ul>
            </div>
        </div><!-- Container /- -->
    </footer><!-- Footer Main /- -->

</div>

<?php $this->endBody() ?>
<script>
    $(function() {
        if(/iPhone|iPad|iPod|Android/i.test(navigator.userAgent) === false){
            $('.dropdown .dropdown-toggle').click(function() {
                location.href = $(this).attr('href');
            });
        }
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
