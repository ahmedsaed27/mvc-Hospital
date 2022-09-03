<?php
namespace Itrax\DbWrapper;

class dbwrapper{
    private $con;
    private $sql;

    public function __construct(){
    $this->con = mysqli_connect("localhost" , "root" , "" , "hospital");
    }
    
    public function select($pramiter ,$table){
        $this->sql = "SELECT $pramiter FROM `$table`";
        return $this;
    }
    
    public function get(){
        $query = mysqli_query($this->con , $this->sql);
        return mysqli_fetch_all($query , MYSQLI_ASSOC);
    }
    
    public function frist(){
        $query = mysqli_query($this->con , $this->sql);
        return mysqli_fetch_assoc($query);
    }
    
    public function where($id , $pramiter , $val){
        $this->sql .= "WHERE `$id` $pramiter '$val'";
        return $this;
    }
    public function andWhere($id , $pramiter , $val){
        $this->sql .=  "AND `$id` $pramiter '$val'";
        return $this;
    }
    public function delate($table){
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }
    
    
    public function insert($table , $data){
       $coulm = '';
       $value = '';
       foreach($data as $key => $val){
        $coulm .= " `$key`,";
        $value .= " '$val',";
       }
        $coulm = rtrim($coulm,',');
        $value = rtrim($value,',');
    
        $this->sql = "INSERT INTO `$table` ($coulm) VALUES  ($value)";
        return $this;
    }
    
    public function ubdate($table , $data){
        $row = "";
        foreach($data as $key => $val){
            $row .= "`$key` = '$val',";
        }
        $row = rtrim($row , ",");
        $this->sql = "UPDATE `$table` SET $row";
        return $this;
    }
    
    
    public function excute(){
       $query = mysqli_query($this->con , $this->sql);
        return mysqli_affected_rows($this->con);
    }

   
    
    public function __destruct(){
        mysqli_close($this->con);
    }
}
