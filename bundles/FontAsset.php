<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace suxiaolin\metronic\bundles;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $sourcePath = '@suxiaolin/metronic/assets';

    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'global/plugins/font-awesome/css/font-awesome.min.css',
    ];
}
