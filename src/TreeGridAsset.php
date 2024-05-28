<?php

namespace jambtc\treegrid;

use yii\web\AssetBundle;

class TreeGridAsset extends AssetBundle
{
    public $sourcePath = '@vendor/jambtc/treegrid/src/assets';
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
