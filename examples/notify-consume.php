<?php

require_once(__DIR__.'/../src/PrismClient.php');

$client = new PrismClient($url = 'http://192.168.51.50:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');


// 往消息队列里获取(消费)元素并确认
while(1) {

    $r = $client->consume();
    $r = json_decode($r);

    echo "$r->body\n";
    $client->ack($r->tag);

}
