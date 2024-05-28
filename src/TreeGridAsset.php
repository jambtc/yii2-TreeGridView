<?php

namespace app\widgets;

use yii\web\AssetBundle;

class TreeGridAsset extends AssetBundle
{
    public $sourcePath = '@vendor/jambtc/assets';
    public $js = [
        'js/treegrid.js',
    ];
    public $css = [
        'css/treegrid.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
