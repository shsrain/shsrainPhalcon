<?php

// ע���Զ����س���
require_once(__DIR__.'/../bootstrap/autoload.php');

try {
    
    // ����Ӧ�ó���
    $app = require_once(__DIR__.'/../bootstrap/app.php');
    
    // ���и�Ӧ�ó���
    $response = $app->handler( $request = new \Phalcon\Http\Request());
    
    $response->send();
    
} catch (Phalcon\Exception $e) {
    echo $e->getMessage();
} catch (PDOException $e) {
    echo $e->getMessage();
}