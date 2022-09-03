<?php
namespace  As984\Hospital\controllers;
use As984\Hospital\core\load;
use As984\Hospital\controllers\authe;
use As984\Hospital\core\validation;
use As984\Hospital\model\user;

class home{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            redirect("login/index");
        }
    }
    public function index(){  
        return view('home/index');
    }
}











?>