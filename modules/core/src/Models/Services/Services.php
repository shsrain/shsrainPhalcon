<?php 

namespace Core\Models\Services;

use Core\Models\Services\Exceptions;

abstract class Services
{
    public static function get($name)
    {
    	$className = "\\Core\\Models\\Services\\Service\\{$name}";
		
        if ( ! class_exists($className)) {
            throw new Exceptions\InvalidServiceException("Class {$className} doesn't exists.");
        }
        
        return new $className();
    }
}
