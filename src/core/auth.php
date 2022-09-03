<?php
namespace As984\Hospital\core;

class auth {
    public static function loginActivity() {
        if (empty($_SESSION['user'])) {
            redirect("login/index");
        }
    }

    public static function returnToAdmin(){
        if(!empty($_SESSION['admin'])){
            redirect('admin/index');
        }
    }

    public static function returnTOHome(){
        if(!empty($_SESSION['user'])){
            \redirect('home/index');
        }
    }
}














?>