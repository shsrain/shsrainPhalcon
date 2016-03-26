<?php

namespace Backend\Models\Services\Contracts\User;

interface Behavior{

    public function create();

    public function handle();
    
    public function fire();
}