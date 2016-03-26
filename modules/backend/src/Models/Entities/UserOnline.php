<?php

namespace Backend\Models\Entities;

class UserOnline extends \Phalcon\Mvc\Model
{

    public function getDatetime()
    {
        return $this->datetime;
    }


    public function validation()
    {

    }

    public function getSource()
    {
        return 'fcdrep_user_online';
    }
}
