<?php
namespace As984\Hospital\core;
class bootstrab
{
  
    private $controler;
    private $method;
    private $params;


    public function __construct() {
        $this->url();
        $this->run();
    }
    private function url(){
        $url = $_SERVER['QUERY_STRING'];
        $url_explade = explode('/', $url);
        $this->controler = (empty($url_explade[0]) ? 'login' : $url_explade[0]);
        $this->method = (empty($url_explade[1]) ? 'index' : $url_explade[1]);
        unset($url_explade[0] ,  $url_explade[1]);
        $this->params = $url_explade;
    }
    private function run(){
        $controler = 'As984\Hospital\controllers\\'.$this->controler;
        $controler = new $controler();
        call_user_func_array([$controler, $this->method], $this->params);
    }





}


?>