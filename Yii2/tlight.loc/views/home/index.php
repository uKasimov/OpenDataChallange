<div class="ads-group v3">
    <div class="container container-240">
        <div class="row">
            <div class="col-lg-3 col-md-3 set-w"></div>
            <div class="col-lg-9 col-md-9 set-w2">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slide">
                            <div class="e-slide v2 js-slider-3items">
                                <?php

                                use yii\widgets\ListView;

                                $slides = \app\module\admin\models\MainSlider::find()->asArray()->limit(3)->all();
                                foreach ($slides as $slide):
                                    ?>
                                    <div class="e-slide-img v2">
                                        <a href="#"><img src="<?= $slide['img'] ?>" alt=""></a>
                                        <div class="box-center slide-content v3">
                                            <p class="cate v2 white text-center"><?= $slide['subtitle'] ?></p>
                                            <h3 class="white v3 text-center"><?= $slide['title'] ?></h3>
                                            <a href="<?= $slide['btn_url'] ?>" class="slide-btn e-red-gradient">Shop now<i
                                                        class="ion-ios-arrow-forward"></i></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ads">
                            <div class="banner-img banner-img2">
                                <a href="#"><img src="img/banner/h1_b1.jpg" alt="" class="img-responsive"></a>
                                <div class="h-banner-content v3">
                                    <p class="content-name">Mini Quick Chagre 3.0</p>
                                    <p class="content-price percent">Sale up to <span class="red">40</span></p>
                                    <a href="#" class="btn-banner">Shop now<i class="ion-ios-arrow-forward"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flash-deals">
    <div class="container-fluid">
        <div class="title-icon t-column">
            <div class="t-inside">
                <img src="img/flash-deals.png" alt="">
            </div>
            <h1>Топ товары</h1>
        </div>
        <div class="owl-carousel owl-theme owl-cate js-owl-cate2">
            <?php for ($i = 0; $i < 7; $i++) : ?>
                <div class="product-item">
                    <div class="product-countd pd-bd product-inner">
                        <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $sales[$i]['id']])?>" class="product-item-countd">
                            <div class="product-head">
                                <div class="ac-img"
                                     style="background: url('<?= $sales[$i]['img'] ?>') no-repeat center top"></div>
                            </div>
                            <div class="product-info">
                                <p class="product-cate text-center"><?= mb_substr($sales[$i]['category']['title'], 0, 25) ?></p>
                                <div class="product-price thin-price v3">
                                    <span class="red">$<?= $sales[$i]['price'] ?></span>
                                    <?php if ($sales[$i]['old_price'] > 0): ?>
                                        <span class="old">$<?= $sales[$i]['old_price'] ?></span>
                                    <?php endif; ?>
                                </div>
                                <h3 class="product-title text-center v2"><?= mb_substr($sales[$i]['title'], 0, 25) ?>
                                    ...</h3>
                            </div>
                        </a>
                        <div class="product-button-group">
                            <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $sales[$i]['id']])?>" class="btn-icon cart-add" data-id="<?=$sales[$i]['id']?>">
                                <span class="icon-bg icon-cart"></span>
                            </a>
                            <a href="#" class="btn-icon">
                                <span class="icon-bg icon-compare"></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="product-tab bg-gradient bg-insinde">
    <div class="container container-240">
        <div class="row">
            <?php for ($i = 0; $i < 7; $i++) : ?>
                <div class="product-item col-md-2 col-xs-6">
                    <div class="pd-bd product-inner">
                        <div class="product-img">
                            <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $sales[$i]['id']])?>">
                                <div class="ac-img"
                                     style="background: url('<?= $sales[$i]['img'] ?>') no-repeat center top"></div>
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="element-list element-list-middle">
                                <p class="product-cate"><?= $sales[$i]['category']['title'] ?></p>
                                <h3 class="product-title"><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $sales[$i]['id']])?>"><?= mb_substr($sales[$i]['title'], 0, 25) ?>
                                        ...</a></h3>
                                <div class="product-bottom">
                                    <div class="product-price ac-flex"><span>$<?= $sales[$i]['price'] ?></span>
                                        <?php if ($sales[$i]['old_price'] > 0): ?>
                                            <span class="old">$<?= $sales[$i]['old_price'] ?></span>
                                        <?php endif; ?></div>
                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $sales[$i]['id']])?>" class="btn-icon btn-view">
                                        <span class="icon-bg icon-view"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-button-group">
                                <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $sales[$i]['id']])?>" class="btn-icon cart-add" data-id="<?=$sales[$i]['id']?>">
                                    <span class="icon-bg icon-cart"></span>
                                </a>
                                <a href="#" class="btn-icon">
                                    <span class="icon-bg icon-compare"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="bestseller2">
    <div class="container container-240">
        <div class="h-heading">
            <div class="title-icon t-inline">
                <img src="img/iconbs.png" alt="">
                <h1>Best Sellers</h1>
            </div>
            <ul class="product-tab-sw2">
                <li class="active"><a data-toggle="tab" href="#store<?= $stores[0]['id'] ?>"
                                      aria-expanded="true"><?= $stores[0]['title'] ?></a></li>
                <?php for ($i = 1; $i < count($stores); $i++): ?>
                    <li><a data-toggle="tab" href="#store<?= $stores[$i]['id'] ?>"
                           aria-expanded="true"><?= $stores[$i]['title'] ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
        <div class="tab-content">Shop by brand
            <?php for ($i = 0; $i < count($stores); $i++): ?>Shop by brand
                <div id="store<?= $stores[$i]['id'] ?>" class="tab-pane fade <?= $i ? '' : 'in active' ?>">
                    <?php
                    $store_products = \app\models\Product::find()->where(['seller_id' => $stores[$i]['id'], 'is_offer' => 1])->with('category')->limit(4)->asArray()->all();
                    ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 product-item">
                            <div class="pd-bd product-inner v3">
                                <div class="product-img v2">
                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[0]['id']])?>"><img src="<?= $store_products[0]['img'] ?>" alt=""
                                                     class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate"><?= $store_products[0]['category']['title'] ?></p>
                                        <h3 class="product-title"><a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[0]['id']])?>"><?= $store_products[0]['title'] ?></a>
                                        </h3>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$<?php if ($store_products[0]['old_price'] > 0) echo $store_products[0]['old_price']; else echo $store_products[0]['price'] ?></span>
                                            </div>
                                        </div>
                                        <div class="product-bottom-group">
                                            <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $store_products[0]['id']])?>" class="btn-icon cart-add" data-id="<?=$store_products[0]['id']?>">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-compare"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-button-group">
                                        <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $store_products[0]['id']])?>" class="btn-icon cart-add" data-id="<?=$store_products[0]['id']?>">
                                            <span class="icon-bg icon-cart"></span>
                                        </a>
                                        <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[1]['id']])?>"><img src="<?= $store_products[1]['img'] ?>" alt=""
                                                             class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="element-list element-list-middle">
                                                <p class="product-cate"><?= $store_products[1]['category']['title'] ?></p>
                                                <h3 class="product-title"><a
                                                            href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[1]['id']])?>"><?= $store_products[1]['title'] ?></a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">$<?= $store_products[1]['price'] ?></span>
                                                        <?php if ($store_products[1]['old_price']>0): ?>
                                                            <span class="old">$<?= $store_products[1]['old_price'] ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $store_products[1]['id']])?>" class="btn-icon cart-add" data-id="<?=$store_products[0]['id']?>">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[2]['id']])?>"><img src="<?= $store_products[2]['img'] ?>" alt=""
                                                             class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="element-list element-list-middle">
                                                <p class="product-cate"><?= $store_products[2]['category']['title'] ?></p>
                                                <h3 class="product-title"><a
                                                            href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[2]['id']])?>"><?= $store_products[2]['title'] ?></a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">$<?= $store_products[2]['price'] ?></span>
                                                        <?php if ($store_products[2]['old_price']>0): ?>
                                                            <span class="old">$<?= $store_products[2]['old_price'] ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[2]['id']])?>" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $store_products[2]['id']])?>" class="btn-icon cart-add" data-id="<?=$store_products[0]['id']?>">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[3]['id']])?>"><img src="<?= $store_products[3]['img'] ?>" alt=""
                                                             class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="element-list element-list-middle">
                                                <p class="product-cate"><?= $store_products[3]['category']['title'] ?></p>
                                                <h3 class="product-title"><a
                                                            href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[3]['id']])?>"><?= $store_products[3]['title'] ?>"</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">$<?= $store_products[3]['price'] ?></span>
                                                        <?php if ($store_products[3]['old_price']>0): ?>
                                                        <span class="old">$<?= $store_products[3]['old_price'] ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <a href="<?=\yii\helpers\Url::to(['product/view', 'id' => $store_products[3]['id']])?>" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="<?=\yii\helpers\Url::to(['cart/add', 'id' => $store_products[3]['id']])?>" class="btn-icon cart-add" data-id="<?=$store_products[3]['id']?>">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class="container container-240">
    <div class="brand">
        <div class="ecome-heading style5v3 spc4">
            <div class="title-icon t-inline t-line">
                <img src="img/iconbrand.png" alt="">
                <h1>Shop by brand</h1>
            </div>
            <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
        </div>

        <div class="owl-carousel owl-theme owl-brand js-owl-brand">
            <div class="brand-item">
                <a href="#" class="hover-images"><img src="img/brand/brand.png" alt=""></a>
            </div>
            <div class="brand-item">
                <a href="#" class="hover-images"><img src="img/brand/brand_2.png" alt=""></a>
            </div>
            <div class="brand-item">
                <a href="#" class="hover-images"><img src="img/brand/brand_3.png" alt=""></a>
            </div>
            <div class="brand-item">
                <a href="#" class="hover-images"><img src="img/brand/brand_4.png" alt=""></a>
            </div>
            <div class="brand-item">
                <a href="#" class="hover-images"><img src="img/brand/brand_5.png" alt=""></a>
            </div>
            <div class="brand-item">
                <a href="#" class="hover-images"><img src="img/brand/brand_7.png" alt=""></a>
            </div>
            <div class="brand-item">
                <a href="#" class="hover-images"><img src="img/brand/brand_8.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<div class="product-tab bg-gradient bg-insinde">
    <div class="container container-240">
        <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'options' => [
                'tag' => 'false',
                'class' => 'row',
            ],
            'itemOptions' => [
                'tag' => false,
            ],
            'layout' => "{items}\n{summary}\n{pager}",
            'itemView' => '_list_item',
        ]);
        ?>
    </div>
</div>
