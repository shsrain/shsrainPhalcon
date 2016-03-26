<?php 

namespace Backend\Models\Repositories;

use Backend\Models\Repositories\Exceptions;

abstract class Repositories
{
    public static function get($name)
    {
    	$className = "\\Backend\\Models\\Repositories\\Repository\\{$name}";
		
        if ( ! class_exists($className)) {
            throw new Exceptions\InvalidRepositoryException("Repository {$className} doesn't exists.");
        }
        
        return new $className();
    }
}
