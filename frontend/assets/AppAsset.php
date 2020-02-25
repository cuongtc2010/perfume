<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/bootstrap.min.css',
        'css/plugins.css',
        'css/iconfont.min.css',
        'css/helper.css',
    ];
    public $js = [
        'js/vendor/jquery-1.12.4.min.js',
        'js/bootstrap.min.js',
        'js/vendor/modernizr-2.8.3.min.js',
        'js/plugins.js',
        'js/main.js',
        'js/popper.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
