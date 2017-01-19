<?php

namespace webtoucher\flowplayerflash;

use Yii;
use yii\base\InvalidParamException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Flowplayer flash widget.
 */
class Player extends Widget
{
    /**
     * Flashembed parameters.
     *
     * @var array
     */
    public $params = [
        'clip' => [
            'autoPlay' => false,
        ],
    ];

    /**
     * Flowplayer configuration.
     *
     * @var array
     */
    public $config = [];

    /**
     * Html options for the div.
     *
     * @var array
     */
    public $options = [
        'style' => 'display: block;'
    ];

    public $src;

    /**
     * @inheritdoc
     * @throws \yii\base\InvalidParamException
     */
    public function init()
    {
        if (!$this->src) {
            throw new InvalidParamException('Param "src" is required.');
        }
    }

    /**
     * @inheritdoc
     * @throws \yii\base\InvalidParamException
     */
    public function run()
    {
        $options = ArrayHelper::merge($this->options, [
            'id' => $this->id,
        ]);
        $this->registerClientScript();
        return Html::tag('div', '', $options);
    }

    /**
     * Registers the needed JavaScript.
     * @throws \yii\base\InvalidParamException
     */
    public function registerClientScript()
    {
        AssetBundle::register($this->view);

        $params = Json::encode(ArrayHelper::merge($this->params, [
            'src' => Yii::$app->assetManager->getPublishedUrl('@bower/flowplayer-flash') . '/flowplayer.swf',
        ]));

        $config = Json::encode(ArrayHelper::merge($this->config, [
            'clip' => $this->src,
        ]));

        $js = "flowplayer('$this->id', $params, $config);";
        $this->view->registerJs($js);
    }
}
