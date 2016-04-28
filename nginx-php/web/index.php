<?php
//echo "aaa";
//phpinfo();
$servername = "192.168.99.100";
$username = "wibble";
$password = "wibble";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


// try {
//     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//     echo "Connected successfully"; 
//     }
// catch(PDOException $e)
//     {
//     echo $e->getMessage();
//     }