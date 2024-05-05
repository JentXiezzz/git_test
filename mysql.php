<?php
require 'vendor/autoload.php';

// 使用 Medoo
use Medoo\Medoo;

// 配置数据库连接
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'sakila',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '123456'
]);

$users = $database->select('actor', ["first_name"]);

// 遍历结果
foreach ($users as $user) {
    echo $user['first_name'] . "\n";
}