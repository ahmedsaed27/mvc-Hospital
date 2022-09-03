<?php

namespace As984\Hospital\controllers;
use As984\Hospital\core\load;
use As984\Hospital\core\validation;
use As984\Hospital\controllers\authe;
use As984\Hospital\model\user;
class login
{
    public function __construct(){
        \session_start();
    }
    public function index()
    {
        if(isset($_SESSION['admin']) ){
            return \redirect("admin/index");
        }elseif(isset($_SESSION['user'])){
            return \redirect("home/index");
        }
        return view('home/login');
    }

    public function loginRequest(){
        load::get("validtion")->input("username")->required();
        load::get("validtion")->input("password")->required();

        if(!load::get("validtion")->is_error()){
           $user = load::get('user_model')->userExist($_POST["username"] , $_POST["password"]);
           if(!empty($user) && $user['role'] == 0){
            $_SESSION['user'] = $user;
            \redirect('home/index');
           }elseif(!empty($user) && $user['role'] == 1){
            $_SESSION['admin'] = $user;
            \redirect('admin/index');
           }
        }
    }

    public function logout(){
        session_destroy();
        redirect("login/index");
    }

    public function log(){
    
        return \view('login/log');
    }

    public function store(){
        load::get('validtion')->input("username")->required();
        load::get('validtion')->input("lastName")->required();
        load::get('validtion')->input("email")->required();
        load::get('validtion')->input("password")->required();
        load::get('validtion')->input("pass_confirm")->required();

        if(!load::get("validtion")->is_error()){
        if($_POST['password'] == $_POST['pass_confirm']){
            unset($_POST['pass_confirm']);
            load::get('user_model')->addNewUser($_POST);
            \redirect('login/index');
        }else{
            return \view('login/log');
        }
    
        }
        

    }
}