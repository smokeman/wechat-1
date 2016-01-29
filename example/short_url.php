<?php

require './example.php';

use Thenbsp\Wechat\Wechat\ShortUrl;
use Thenbsp\Wechat\Wechat\Exception\ShortUrlException;

$shortUrl = new ShortUrl($accessToken);

try {
    $url = $shortUrl->getShortUrl('http://mp.weixin.qq.com/wiki/6/856aaeb492026466277ea39233dc23ee.html');
} catch (ShortUrlException $e) {
    exit($e->getMessage());
}

var_dump($url);