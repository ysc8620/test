<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2016/9/11
 * Time: 11:52
 */
/**
 * redis 订阅
 */
$redis = new Redis();
$redis->connect('192.168.92.128',6379);
$redis->subscribe(array('msg'), 'callback');
function callback($instance, $channelName, $message) {
    echo $channelName, "==>", $message,PHP_EOL;
}