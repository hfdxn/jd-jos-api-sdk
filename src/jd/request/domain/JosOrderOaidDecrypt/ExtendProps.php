<?php

namespace JdJos\jd\request\domain\JosOrderOaidDecrypt;
class ExtendProps{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $value1;
    
    public function setValue1($value1){
        $this->params['value1'] = $value1;
    }

    public function getValue1(){
        return $this->value1;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>