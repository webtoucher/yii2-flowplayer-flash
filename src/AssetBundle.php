<?php

namespace webtoucher\flowplayerflash;

use yii\web\AssetBundle as BaseAssetBundle;

/**
 * Asset Bundle with Flowplayer flash.
 */
class AssetBundle extends BaseAssetBundle
{
    public $sourcePath = '@bower/flowplayer-flash';

    public $js = [
        'flowplayer.min.js',
    ];
}
