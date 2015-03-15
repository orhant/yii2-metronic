<?php
/**
 * @link http://www.diginova.com.tr/
 * @copyright Copyright (c) 2014 DigiNova 
 * @license http://www.diginova.com.tr/yii2-metronic.license
 */

namespace diginova\metronic\widgets;

use Yii;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * TextInputWidget renders text input widget.
 *
 * An input widget can be associated with a data model and an attribute,
 * or a name and a value. If the former, the name and the value will
 * be generated automatically.
 */
class TextInputWidget extends InputWidget
{
    /**
     * Executes the widget.
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }
    }
}
