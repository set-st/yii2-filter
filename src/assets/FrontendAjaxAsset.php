<?php
namespace set_st\filter\assets;

use yii\web\AssetBundle;

class FrontendAjaxAsset extends AssetBundle
{
    public $depends = [
        'dvizh\filter\assets\FrontendAsset'
    ];

    public $js = [
        'js/frontend_ajax.js',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/../web';
        parent::init();
    }

}
