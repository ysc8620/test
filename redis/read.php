<?php
$id = intval($argv[1]);

$redis = new redis();
$redis->connect("192.168.92.128",6379);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
var_dump($bool);

/////////////6380
$redis->connect("192.168.92.128",6380);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
var_dump($bool);

/////////////6381
$redis->connect("192.168.92.128",6381);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
var_dump($bool);
/////////////6382
$redis->connect("192.168.92.128",6382);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
var_dump($bool);