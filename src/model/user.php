<?php
namespace As984\Hospital\model;
use Itrax\DbWrapper\dbwrapper;
class user extends dbwrapper{
    public function getAllUsers(){
       return $this->select('*','user')->get();
    }

    public function addNewUser($data){
        return $this->insert('user',$data)->excute();
    }

    public function delateUser($id){
        return $this->delate('patient')->where('id', '=', $id)->excute();
    }

    public function getUserById($id){
        return $this->select('*','patient')->where('id', '=', $id)->frist();
    }

    public function upd($date , $id){
        return $this->ubdate('patient',$date)->where('id', '=', $id)->excute();
    }

    public function userExist($username , $password){
        return $this->select('*','user')->where('username' , '=' , "$username")->andWhere('password' , '=' , "$password")->frist();
    }


     public function addNewPatient($data){
        return $this->insert('patient',$data)->excute();
    }

    public function getAllPatients(){
        return $this->select('*','patient')->get();
    }

    public function search_pationt($id){
        return $this->select('*','patient')->where('Serial_Number', '=', $id)->frist();
    }

    public function add_new_pation_IntoWatingList($data){
        return $this->insert('waiting_list',$data)->excute();
    }

    public function getAll_wating_list(){
        return $this->select('*','waiting_list')->get();
    }

    public function delateUser_from_watinglist($id){
        return $this->delate('waiting_list')->where('id', '=', $id)->excute();
    }

    public function upd_watingList($date , $id){
        return $this->ubdate('waiting_list',$date)->where('id', '=', $id)->excute();
    }

    public function getUserById_from_watingList($id){
        return $this->select('*','waiting_list')->where('id', '=', $id)->frist();
    }
        
}
