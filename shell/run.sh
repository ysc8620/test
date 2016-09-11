#!/bin/bash
for i in `seq 1`;
#for(( i = 0; i < ${count}; i++ ))
do
{
    php /data/website/test/redis/redis.php 2
}&
done
wait

echo 'finish'