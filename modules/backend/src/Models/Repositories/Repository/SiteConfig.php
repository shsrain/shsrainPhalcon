<?php

namespace Backend\Models\Repositories\Repository;

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
        $entity = $this->getDi()->get('entitySiteConfig');
        foreach($data['varname'] as $key => $value){
            $where = array('varname'=>$key);
            $record = $entity->findFirst($where);
            if($record){
                $record->varname = $key;
                $record->value = $value;
                $result = $record->save();   
            }else{
                $entity->varname = $key;
                $entity->value = $value;
                $result = $entity->save();                  
            }
        }
        return true;
    }
    
    public function getConfig($data = array()){
        $entity = $this->getDi()->get('entitySiteConfig');
        return $entity->find();
    }
}
