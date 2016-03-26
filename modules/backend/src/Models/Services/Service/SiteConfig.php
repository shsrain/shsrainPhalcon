<?php

namespace Backend\Models\Services\Service;

use Phalcon\Di\InjectionAwareInterface;

class SiteConfig implements InjectionAwareInterface
{
    protected $di;
    
    public function setDi(\Phalcon\DiInterface $di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }
    
    public function updateConfig($data = array()){
        return $this->getDi()->get('siteConfigRepository')->updateConfig($data);
    }
    
    public function getConfig(){
        return $this->getDi()->get('siteConfigRepository')->getConfig();
    }
}
