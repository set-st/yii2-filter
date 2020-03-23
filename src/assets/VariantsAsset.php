<?php
namespace set_st\filter\assets;

use yii\web\AssetBundle;

class VariantsAsset extends AssetBundle
{
    public $depends = [
        'dvizh\filter\assets\Asset'
    ];

    public $js = [
        'js/variants.js',
    ];

    public $css = [
        'css/variants.css',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/../web';
        parent::init();
    }

}
