<?php
// 创建 TCP Socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// 绑定 IP 地址和端口
socket_bind($socket, '127.0.0.1', 8888);

// 开始监听连接
socket_listen($socket);

echo "TCP Server started. Listening on port 8888...\n";

// 循环接受客户端连接
while (true) {
    // 接受客户端连接
    $client_socket = socket_accept($socket);

    // 从客户端接收数据
    $data = socket_read($client_socket, 1024);

    // 处理客户端发送的数据
    echo "Received from client: $data\n";

    // 向客户端发送响应数据
    $response = "Hello from server!";
    socket_write($client_socket, $response, strlen($response));

    // 关闭客户端套接字
    socket_close($client_socket);
}

// 关闭服务器套接字
socket_close($socket);
?>
