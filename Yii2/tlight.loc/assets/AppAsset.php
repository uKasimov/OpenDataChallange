<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/e-come/css/style.css',
        '/e-come/css/owl.carousel.min.css',
        '/e-come/css/slick.css',
        '/e-come/css/slick-theme.css',
        '/e-come/css/owl.theme.default.min.css',
        '/css/site.css',
    ];
    public $js = [
        '/e-come/js/jquery.js',
        '/e-come/js/bootstrap.js',
        '/e-come/js/owl.carousel.min.js',
        '/e-come/js/slick.js',
        '/e-come/js/slick.min.js',
        '/e-come/js/countdown.js',
        '/e-come/js/bootstrap-slider.min.js',
        '/e-come/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
