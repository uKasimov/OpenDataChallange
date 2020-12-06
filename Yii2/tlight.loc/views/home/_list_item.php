
<div class="product-item col-md-2 col-xs-6">
    <div class="pd-bd product-inner">
        <div class="product-img">
            <a href="#"><div class="ac-img" style="background: url('<?=$model->img?>') no-repeat center top"></div></a>
        </div>
        <div class="product-info">
            <div class="element-list element-list-middle">
                <p class="product-cate"><?=$model->category->title?></p>
                <h3 class="product-title"><a href="#"><?=mb_substr($model->title, 0, 25)?>...</a></h3>
                <div class="product-bottom">
                    <div class="product-price ac-flex"><span>$<?=$model->price?></span>
                        <?php if ($model->old_price>0): ?>
                            <span class="old">$<?=$model->old_price?></span>
                        <?php endif; ?>
                    </div>
                    <a href="#" class="btn-icon btn-view">
                        <span class="icon-bg icon-view"></span>
                    </a>
                </div>
            </div>
            <div class="product-button-group">
                <a href="#" class="btn-icon cart-add" data-id="<?=$model->id?>">
                    <span class="icon-bg icon-cart"></span>
                </a>
                <a href="#" class="btn-icon">
                    <span class="icon-bg icon-wishlist"></span>
                </a>
                <a href="#" class="btn-icon">
                    <span class="icon-bg icon-compare"></span>
                </a>
            </div>
        </div>
    </div>
</div>
