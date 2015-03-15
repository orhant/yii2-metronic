<?php

/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace diginova\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class GridViewSortableAsset extends AssetBundle {

    public $sourcePath = '@diginova/metronic/assets';

    /**
     * @var array JS
     */
    public $js = [
        'global/scripts/sortable.gridview.js',
    ];

    /**
     * @var array depends
     */
    public $depends = [
        'yii\jui\JuiAsset',
    ];

}
