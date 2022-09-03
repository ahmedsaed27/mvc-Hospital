<?php
namespace As984\Hospital\controllers;
use As984\Hospital\core\load;
use As984\Hospital\core\validation;
use As984\Hospital\model\user;
use As984\Hospital\core\auth;



trait authe{

    public function __construct()
    {
        session_start();
        load::get('auth_core')->loginActivity();
    }
   
}
