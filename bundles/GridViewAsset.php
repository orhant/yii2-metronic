<?php

/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace diginova\metronic\bundles;

use yii\web\AssetBundle;

class GridViewAsset extends AssetBundle {

    /**
     * @var string source path
     */
    public $sourcePath = '@diginova/metronic/assets';

    /**
     * @var array CSS
     */
    public $css = [
        'global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css',
    ];

}
