<?php

namespace  As984\Hospital\controllers;
use As984\Hospital\core\load;
use As984\Hospital\controllers\authe;
use As984\Hospital\core\validation;
use As984\Hospital\model\user;
use As984\Hospital\core\auth;

class admin{
    
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['admin'])) {
            redirect("login/index");
        }
    }
    public function index(){
        
        return \view('admin/index');
    }

    public function Patient(){
        $user = load::get('user_model')->getAllPatients();
        return \view('admin/Patient', ['user' => $user]);
    }

    public function addPatient(){
        return \view('admin/addPatient');
    }
    public function insertPatient(){
        $user = load::get('user_model')->getAllPatients();
        if(\count($user) == 10){
            $eror []= "you can not add more pation here!!";
            return \view('admin/Patient' , ['eror' => $eror , 'user' => $user]);
        }else{
            $Patient = load::get('user_model')->addNewPatient($_POST);
            \redirect('admin/Patient');
        }
        
    }

    public function delatePatient($id){
        $Patient = load::get('user_model')->delateUser($id);
        \redirect('admin/Patient');
    }

    public function edit($id){
        $post = load::get('user_model')->getUserById($id);
        return \view('admin/edit', ['post' => $post]);
    }

    public function updatePatient(){
        load::get('validtion')->input('name')->required();
        load::get('validtion')->input('Serial_Number')->required();
        load::get('validtion')->input('date')->required();
        load::get('validtion')->input('age')->required();
        load::get('validtion')->input('job')->required();
        load::get('validtion')->input('address')->required();
        load::get('validtion')->input('sendby')->required();
        load::get('validtion')->input('arrivalTime')->required();
        load::get('validtion')->input('roomNum')->required();
        load::get('validtion')->input('Notics')->required();
        if(!load::get("validtion")->is_error()){
            $id = $_POST['id'];
            unset($_POST['id']);
            load::get("user_model")->upd($_POST,$id);
            \redirect('admin/Patient');
        }
        
        
    }

    public function search_bar(){
        return \view('admin/search');
    }

    public function search(){
        if(isset($_POST['search'])){
           $user = load::get('user_model')->search_pationt($_POST['search']);
        return \view('admin/search' , ['pationt' => $user]); 
        }
          
    }

    public function Waiting_list(){
        $user = load::get('user_model')->getAll_wating_list();
        return \view('admin/Waiting_list',['user' => $user]);
    }

    public function add_wating(){
        return \view('admin/add_wating');
    }


    public function insert_watingList(){
        $Patient = load::get('user_model')->add_new_pation_IntoWatingList($_POST);
        \redirect('admin/Waiting_list');
    }

    public function delatePatient_fromWatingList($id){
        $Patient = load::get('user_model')->delateUser_from_watinglist($id);
        \redirect('admin/Waiting_list');
    }




    public function edit_watingList($id){
        $post = load::get('user_model')->getUserById_from_watingList($id);
        return \view('admin/edit_watingList', ['post' => $post]);
    }


    public function updatePatient_fromWatingList(){
        load::get('validtion')->input('name')->required();
        load::get('validtion')->input('Serial_Number')->required();
        load::get('validtion')->input('date')->required();
        load::get('validtion')->input('age')->required();
        load::get('validtion')->input('job')->required();
        load::get('validtion')->input('address')->required();
        load::get('validtion')->input('sendby')->required();
        load::get('validtion')->input('arrivalTime')->required();
        load::get('validtion')->input('roomNum')->required();
        load::get('validtion')->input('Notics')->required();
        if(!load::get("validtion")->is_error()){
            $id = $_POST['id'];
            unset($_POST['id']);
            load::get("user_model")->upd_watingList($_POST,$id);
            \redirect('admin/Waiting_list');
        }
        
        
    }




}










?>