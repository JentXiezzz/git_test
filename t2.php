<?php
// 使用生成器方式生成整数序列
function generateGenerator() {
    for ($i = 1; $i <= 1000000; $i++) {
        yield $i;
    }
}


// 测试生成器方式生成整数序列的内存占用
$generator = generateGenerator($conn);
foreach ($generator as $key => $value) {
	echo $value;
}
echo "Memory usage for generator: " . (memory_get_usage() / 1024 / 1024) . " MB\n";



//命令行输出：Memory usage for generator: 0.37730407714 MB