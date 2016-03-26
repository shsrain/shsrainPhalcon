<?php

namespace Core\Http\Controllers;

use Phalcon\Mvc\Controller;

class AdminController extends Controller
{
    protected $mod;
    
    protected $config;
    
    protected $sysConfig;
    
    protected $nav;
    
    protected $menudata;
    
    protected $cache_model;
    
    protected $categorys;
    
    protected $module;
    
    protected $moduleid;
    
    protected $type;
    
    protected $urlrule;
    
    protected $lang;
    
	public function initialize()
	{
        $this->assets
            ->collection('header')
            ->addCss('vendor/AmazeUi/2.5.2.min/css/amazeui.css')
            ->addCss('vendor/AmazeUi/2.5.2.min/css/admin.css');        

        $this->assets
            ->collection('lt IE 9')
            ->addJs('http://libs.baidu.com/jquery/1.11.1/jquery.min.js', false)
            ->addJs('http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js', false)
            ->addJs('vendor/AmazeUi/2.5.2.min/js/amazeui.ie8polyfill.js', true);
        $this->assets
            ->collection('gte IE 9')
            ->addJs('vendor/AmazeUi/2.5.2.min/js/jquery.js');  
        $final = time();            
        $this->assets
            ->collection('footer')     
            //->setTargetPath('../data/cache/js/'.$final.'.js')
            //->setTargetUri('../data/cache/js/'.$final.'.js')     
            ->addJs('vendor/AmazeUi/2.5.2.min/js/amazeui.js')
            ->addJs('vendor/AmazeUi/2.5.2.min/js/app.js')
            //->join(true)
            //->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ;        
	}
    
    public function getNavAction($menuid=2,$isnav=0){
        echo 'getnav';
    }
    
    protected function getListAction($modelname, $map = '', $sortBy = '', $asc = false ,$listRows = 0){
        echo 'getListAction';
    }

	public function addAction() {
		//echo 'addAction';
	}

    public function insertAction(){
        echo 'insertAction';
    }
    
    public function editAction(){
        $this->assets
            ->collection('editorcss')
            ->addCss('vendor/kindeditor/4.1.10-zh-CN.min/themes/default/default.css');

        $this->assets
            ->collection('editorjs')
            ->addJs('vendor/kindeditor/4.1.10-zh-CN.min/kindeditor.js')
            ->addJs('vendor/kindeditor/4.1.10-zh-CN.min/lang/zh_CN.js');    
        echo 'editAction';
    }
    
    public function updateAction(){
        echo 'updateAction';
    }
    
    public function deleteAction(){
        echo 'deleteAction';
    }
    
    public function deleteAllAction(){
        echo 'deleteAllAction';
    }
    
    public function listorderAction(){
        echo 'listorderAction';
    }
    
    public function statusAction(){
        echo 'statusAction';
    }
    
    public function indexAction(){
        echo 'indexAction';
    }
    
    public function createShowAction($id,$module){
        echo 'createShowAction';
    }
    
    public function createListAction($catid,$p=1,$count=0){
        echo 'createListAction';
    }
    
    public function createIndexAction($sitemap){
        echo 'createIndexAction';
    }
    
    public function verifyAction(){
        echo 'verifyAction';
    }
    
    public function clisthtmlAction($id){
        echo 'clisthtmlAction';
    }
}
