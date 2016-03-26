<?php

namespace Core\Http\Controllers;

use Phalcon\Mvc\Controller;

use \Core\Models\Services\Services as Services;

class HomeController extends Controller
{
    
	public function initialize()
	{
        $this->assets
            ->collection('header')
            ->addCss('vendor/AmazeUi/2.5.2.min/css/amazeui.css');

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
            ->addJs('vendor/AmazeUi/2.5.2.min/js/amazeui.js');        
    }
    
	public function indexAction()
	{

	}
    
    public function listsAction(){
        
    }
    
    public function showAction(){
        
    }
    
    public function downloadAction(){
        
    }
    
    public function hitsAction(){
        
    }
    
    public function verifyAction(){
        
    }
}
