<?php
namespace As984\Hospital\core;

class validation
{
    private $value;
    private $input;
    private $error = [];

    //    return input values
    public function input($name){
        $this->input = $name;
        $this->value = $_REQUEST[$this->input];
        return $this;
    }

    public function required(){
        if(empty($this->value) || strlen($this->value) == 0 || $this->value == ''){
           echo $this->error[$this->input] = "this input : ".$this->input." must be required".'<br>';
        }
        return $this;
    }

    public function min($min){
        if(strlen($this->value) <= $min){
            $this->error[$this->input] = "this input : ".$this->input." min length must be $min";
        }
        return $this;
    }

    public function max($max){
        if(strlen($this->value) >= $max){
            $this->error[$this->input] = "this input : ".$this->input." max length must be $max";
        }
        return $this;
    }

    public function email(){
        if(!filter_var($this->value,FILTER_VALIDATE_EMAIL)){
            $this->error[$this->input] = "this input : ".$this->input." must be email format";
        }
        return $this;
    }

    public function showErorr(){
        $msg = '<div class="alert alert-danger" role="alert"><ul>';
        foreach ($this->error as $error) {
            $msg .= "<li>$error</li>";
        }
        $msg .="</ul></div>";
        echo $msg;
    }

    public function is_error(){
        return (count($this->error) > 0) ? 1 : 0;
    }


}