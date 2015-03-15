<?php

/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace diginova\metronic\bundles;

use yii\web\AssetBundle;

/**
 * IonRangeSliderAsset for slider widget.
 */
class IonRangeSliderAsset extends AssetBundle {

    public $sourcePath = '@diginova/metronic/assets';
    public $js = [
        'global/plugins/ion.rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js',
    ];
    public $css = [
        'global/plugins/ion.rangeslider/css/ion.rangeSlider.css',
        'global/plugins/ion.rangeslider/css/ion.rangeSlider.Metronic.css',
    ];
    public $depends = [
        'diginova\metronic\bundles\CoreAsset',
    ];

}
