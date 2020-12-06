<?php


namespace app\assets;


use yii\web\AssetBundle;

class SellerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/site.css',
        'adminlte/seller.css',
        'adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'adminlte/plugins/fontawesome-free/css/all.min.css',
        'adminlte/plugins/fontawesome-free/css/v4-shims.css',
        'adminlte/dist/css/adminlte.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    ];
    public $js = [
//        'adminlte/plugins/jquery/jquery.min.js',
        'adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'adminlte/plugins/chart.js/Chart.min.js',
        'adminlte/dist/js/adminlte.min.js',
        'adminlte/dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
