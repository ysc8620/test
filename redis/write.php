<?php
$id = intval($argv[1]);

$redis = new redis();
$redis->connect("192.168.92.128",6379);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
$redis->watch('user_read_'.$id);
#sleep(3);
if(
!$bool
){
    $redis->multi();
    $redis->incr('user_read_'.$id, 1);
    $redis->incrByFloat('user_bank_'.$id, 10);
    $res = $redis->exec();
    if($res){
        echo "ok===\r\n";
    }else{
        echo "exit===\r\n";
    }
}else{
    echo "false\r\n";
}

/////////////6380
$redis->connect("192.168.92.128",6380);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
$redis->watch('user_read_'.$id);
#sleep(3);
if(
!$bool
){
    $redis->multi();
    $redis->incr('user_read_'.$id, 1);
    $redis->incrByFloat('user_bank_'.$id, 10);
    $res = $redis->exec();
    if($res){
        echo "ok===\r\n";
    }else{
        echo "exit===\r\n";
    }
}else{
    echo "false\r\n";
}

/////////////6381
$redis->connect("192.168.92.128",6381);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
$redis->watch('user_read_'.$id);
#sleep(3);
if(
!$bool
){
    $redis->multi();
    $redis->incr('user_read_'.$id, 1);
    $redis->incrByFloat('user_bank_'.$id, 10);
    $res = $redis->exec();
    if($res){
        echo "ok===\r\n";
    }else{
        echo "exit===\r\n";
    }
}else{
    echo "false\r\n";
}

/////////////6382
$redis->connect("192.168.92.128",6382);
echo 'user_read_'.$id."\r\n";
$bool = $redis->get('user_read_'.$id);
$redis->watch('user_read_'.$id);
#sleep(3);
if(
!$bool
){
    $redis->multi();
    $redis->incr('user_read_'.$id, 1);
    $redis->incrByFloat('user_bank_'.$id, 10);
    $res = $redis->exec();
    if($res){
        echo "ok===\r\n";
    }else{
        echo "exit===\r\n";
    }
}else{
    echo "false\r\n";
}