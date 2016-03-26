<?php

// 注册自动加载程序
require_once(__DIR__.'/../bootstrap/autoload.php');

try {
    
    // 载入应用程序
    $app = require_once(__DIR__.'/../bootstrap/app.php');
    
    // 运行该应用程序
    $response = $app->handler( $request = new \Phalcon\Http\Request());
    
    $response->send();
    
} catch (Phalcon\Exception $e) {
    echo $e->getMessage();
} catch (PDOException $e) {
    echo $e->getMessage();
}