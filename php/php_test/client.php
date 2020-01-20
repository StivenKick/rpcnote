<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Grpc\ChannelCredentials;

require './Xgh/helloWorld/GPBMetadata/Hello.php';
require './Xgh/helloWorld/HelloWorld/HelloClient.php';
require './Xgh/helloWorld/HelloWorld/HelloReply.php';
require './Xgh/helloWorld/HelloWorld/HelloRequest.php';

// 创建客户端实例

$helloClient = new HelloWorld\HelloClient('127.0.0.1:50001', [
    'credentials' => ChannelCredentials::createInsecure(),'timeout' => 1000,
]);

for ($i=0;$i<10000;$i++){



$name = "World XGH ".time();

$helloRequest = new HelloWorld\HelloRequest();
$helloRequest->setName($name);
$request = $helloClient->HelloWorld($helloRequest)->wait();

//返回数组

/** @var array $status */
/** @var HelloWorld\HelloReply $response */
list($response, $status) = $request;

var_dump($response->getMessage());
echo PHP_EOL;
//var_dump($status);
    usleep(1000000);
}