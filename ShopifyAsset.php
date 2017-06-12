<?php
/**
 * Created by PhpStorm.
 * User: gogl92
 * Date: 12/06/17
 * Time: 01:18 AM
 */

namespace vendor\inquid;


use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ShopifyAsset extends AssetBundle
{
    public $sourcePath = '@vendor/saidbakr';
    public $autoGenerate = true;

    public $css = [

    ];
    public $js = [
        'js/buy-button.js'
    ];
    public $depends = [
        'yii\jui\JuiAsset',
    ];
}
