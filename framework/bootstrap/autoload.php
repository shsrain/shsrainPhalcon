<?php

define('PHALCON_START', microtime(true));

// 注册 Composer 自动加载程序
require_once(__DIR__.'/../vendor/autoload.php');

// 包含 Application 类文件
require_once(__DIR__.'/../app/Application.php');