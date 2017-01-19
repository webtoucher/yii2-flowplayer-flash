# yii2-flowplayer-flash
This extension provides an assets bundle with [Flowplayer flash](https://github.com/flowplayer/flash/)
for [Yii framework 2.0](http://www.yiiframework.com/) applications.

[![Latest Stable Version](https://poser.pugx.org/webtoucher/yii2-flowplayer-flash/v/stable)](https://packagist.org/packages/webtoucher/yii2-flowplayer-flash)
[![Total Downloads](https://poser.pugx.org/webtoucher/yii2-flowplayer-flash/downloads)](https://packagist.org/packages/webtoucher/yii2-flowplayer-flash)
[![Daily Downloads](https://poser.pugx.org/webtoucher/yii2-flowplayer-flash/d/daily)](https://packagist.org/packages/webtoucher/yii2-flowplayer-flash)
[![Latest Unstable Version](https://poser.pugx.org/webtoucher/yii2-flowplayer-flash/v/unstable)](https://packagist.org/packages/webtoucher/yii2-flowplayer-flash) 
[![License](https://poser.pugx.org/webtoucher/yii2-flowplayer-flash/license)](https://packagist.org/packages/webtoucher/yii2-flowplayer-flash)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require webtoucher/yii2-flowplayer-flash "*"
```

or add

```
"webtoucher/yii2-flowplayer-flash": "*"
```

to the ```require``` section of your `composer.json` file.

## Usage

In view

```php
echo \webtoucher\flowplayerflash\Player::widget([
   'id' => 'player',
   'src' => '/url/to/video.mp4',
   'params' => [
       'width' => 640,
       'height' => 360,
   ],
]);
```

Please read [project documentation](https://github.com/flowplayer/flash) for more information.
