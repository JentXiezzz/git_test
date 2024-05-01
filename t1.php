<?php
// 创建 HTTP 服务器
$http = new Swoole\Http\Server("127.0.0.1", 9501);

// 监听请求事件
$http->on('request', function ($request, $response) {
    // 设置响应头
    $response->header("Content-Type", "text/plain");

    // 发送响应内容
    $response->end("Hello, World!\n");
});

// 启动服务器88811111
$http->start();