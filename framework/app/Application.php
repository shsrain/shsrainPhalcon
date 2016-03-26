<?php

namespace App;

use Phalcon\DI;
use Phalcon\Mvc\Application as PhalconApplication;
use Phalcon\Http\Request;

class Application extends PhalconApplication{
   
    public $response;
    
    public $request;
    
    public $realPath;
    
    public function __construct($realPath){
        
        $this->realpath = $realPath;
        $this->appPath();
        $this->appLoader();
    }
    
    // 从配置文件注册应用目录
    public function appPath(){
        $path = new \Phalcon\Config\Adapter\Ini($this->realpath.'/config/path.ini');
        $loader = new \Phalcon\Loader();
        $loader->registerDirs(
            array(
                $this->realpath . $path->application->appDir,
                $this->realpath . $path->application->bootstrapDir,
                $this->realpath . $path->application->configDir,
                $this->realpath . $path->application->dataDir,
                $this->realpath . $path->application->modulesDir,                
                $this->realpath . $path->application->pluginsDir,
                $this->realpath . $path->application->publicDir,
                $this->realpath . $path->application->resourcesDir,
                $this->realpath . $path->application->vendorDir,
                $this->realpath . $path->application->widgetsDir,        
            )
        )->register();
    }
    
    // 核心工具加载
    public function appLoader(){
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array('App' => APP_PATH.'app/'))->register();
        $load = new \App\Loader();
        $load->register();
    }
    
    // 获取请求
    public function handler(Request $request){
        return parent::handle();
    }
    
    // 返回响应
    public function send(){
        echo $this->response->getContent();
    }
}