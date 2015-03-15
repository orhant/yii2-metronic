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
class SpinnerAsset extends AssetBundle
{
    public $sourcePath = '@diginova/metronic/assets';
    public $js = [
        'plugins/fuelux/js/spinner.min.js',
    ];

    public $depends = [
        'diginova\metronic\bundles\CoreAsset',
    ];
}
