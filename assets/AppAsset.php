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
        'css/style.css',
        'css/aos.css',
        'css/bootstrap.css',
        'css/bootstrap-icons.css',
        'css/boxicons.min.css',
        'css/glightbox.min.css',
        'css/remixicon.css',
        'css/swiper-bundle.min.css',
    ];
    public $js = [
        'js/aos.js',
        'js/bootstrap.bundle.min.js',
        'js/bootstrap.esm.js',
        'js/bootstrap.js',
        'js/glightbox.min.js',
        'js/isotope.pkgd.min.js',
        'js/noframework.waypoints.js',
        'js/swiper-bundle.min.js',
        'js/validate.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
