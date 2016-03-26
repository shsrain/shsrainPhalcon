<?php

namespace Backend\Models\Services\Contracts\User;

interface Auth{
    
    public function addNodes($nodes = '');
    
    public function removeNodes($nodes = null);
    
    public function getNodes($nodes = null);
    
    public function getNodesType($nodes = null);
    
    public function checkAuthNodes($user,$nodes);
}