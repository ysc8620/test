<?php
/**
 * Created by PhpStorm.
 * User: ShengYue
 * Date: 2016/9/12
 * Time: 16:16
 */
// $yonghu_yue


$id = intval($argv[1]);

$redis = new redis();
$redis->connect("192.168.113.128",6379);
# echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);

$goods_price = $redis->get("goods:price:100");
$user_bank = $redis->get("user:bank:100");
$goods_sku = $redis->get("goods:sku:100");

if($user_bank < $goods_price){
    echo "$id==user bank slow\r\n";
    die();
}

if($goods_sku<1){
    echo "$id==goods sku slow\r\n";
    die();
}
sleep(2);
$redis->watch("user:bank:100");
$redis->watch("goods:sku:100");
$redis->multi();
$res1 = $redis->incrByFloat("user:bank:100","-{$goods_price}");
$res2 = $redis->decr("goods:sku:100");
$res3 = $redis->incrByFloat("user:bank:total", $goods_price);
$res3 = $redis->exec();
if($res2){
    echo "$id==ok\r\n";
}else{
    echo "$id==false\r\n";
}
