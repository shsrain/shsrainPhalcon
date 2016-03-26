<?php

namespace Backend\Controllers;

use Core\Http\Controllers\AdminController as Controller;

class ConfigController extends Controller
{
    public function editAction(){
        $result = $this->siteConfigService->getConfig();
        $this->view->config = $result;
        parent::editAction();
    }
    
    public function updateAction(){
       $data = $this->request->getPost();
       $result = $this->siteConfigService->updateConfig($data);
    }
    
    public function addConfigOptionAction(){
        
    }
    
    public function deleteConfigOptionAction(){
        
    }
}
