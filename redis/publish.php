<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2016/9/11
 * Time: 11:52
 */
/**
 * redis 发布订阅
 */
$redis = new Redis();
$redis->connect('192.168.92.128',6379);
$redis->publish('msg', date("Y-m-d H:i:s").'节操一屏幕');