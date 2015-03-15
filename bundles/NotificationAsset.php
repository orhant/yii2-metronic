<?php
/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace  diginova\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class NotificationAsset extends AssetBundle
{
    public $sourcePath = '@diginova/metronic/assets';
    public $js = [
        'plugins/bootstrap-toastr/toastr.min.js',
    ];

    public $css = [
        'plugins/bootstrap-toastr/toastr.min.css',
    ];

    public $depends = [
        'diginova\metronic\bundles\CoreAsset',
    ];
}
