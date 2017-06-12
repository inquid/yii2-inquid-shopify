<?php

namespace vendor\inquid;

/**
 * This is just an example.
 */
class BuyNow extends \yii\base\Widget
{
    public function run()
    {
        ShopifyAsset::register($this->getView());
        return "<div class=\"product\" id=\"product-1\"></div>";
    }
}
