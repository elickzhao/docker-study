<?php
phpinfo();
//var_dump($GLOBALS);
//echo shell_exec('echo $PHP_PORT_9000_TCP_ADDR');
echo exec('whoami');
// $output = shell_exec('$PHP_PORT_9000_TCP_ADDR');
// echo "<pre>$output</pre>";

// $last_line = system('env', $retval);
// var_dump($last_line);


// 输出 shell 命令 "ls" 的返回结果
// 并且将输出的最后一样内容返回到 $last_line。
// 将命令的返回值保存到 $retval。
// $last_line = system('ls', $retval);

// // 打印更多信息
// echo '
// </pre>
// <hr />Last line of the output: ' . $last_line . '
// <hr />Return value: ' . $retval;


$servername = "mysql";
$username = "root";
$password = "123456";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";