<?php

/**
 * TreeGridView
 *
 * @package    TreeGridView
 * @version    1.0.0
 * @description A Yii2 GridView extension that provides a tree-like structure with collapsible rows.
 * @link       https://github.com/your-username/TreeGridView
 * @license    MIT License (https://opensource.org/licenses/MIT)
 *
 * @category   Widgets
 * @author     Your Name <jambtc@gmail.com>
 */

namespace app\widgets;

use jambtc\assets\TreeGridAsset;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class TreeGridView extends GridView
{
    public $depthColumn; 
    public $keyColumnName; 

    public function init()
    {
        parent::init();
        $view = $this->getView();
        TreeGridAsset::register($view);
    }

    public function renderTableRow($model, $key, $index)
    {
        $keyValue = ArrayHelper::getValue($model, $this->keyColumnName);

        $cells = [];
        foreach ($this->columns as $column) {
            $cells[] = $column->renderDataCell($model, $key, $index);
        }

        $depth = $model[$this->depthColumn]; 

        if ($this->rowOptions instanceof \Closure) {
            $options = call_user_func($this->rowOptions, $model, $key, $index, $this);
        } else {
            $options = $this->rowOptions;
        }
        $options['data-key'] = $keyValue; 

        Html::addCssClass($options, "tree-grid-view");
        if ($depth > 0) {
            Html::addCssClass($options, "depth-indent");
        }

        return Html::tag('tr', implode('', $cells), $options);
    }
}