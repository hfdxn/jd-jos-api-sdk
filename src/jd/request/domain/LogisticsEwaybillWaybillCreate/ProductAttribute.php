<?php
namespace LogisticsEwaybillWaybillCreate;
class ProductAttribute{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ldop.alpha.waybill.api.dto.waybill.ExtendAttributeDTO";
    }
        
    private $code;
    
    public function setCode($code){
        $this->params['code'] = $code;
    }

    public function getCode(){
        return $this->code;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $value;
    
    public function setValue($value){
        $this->params['value'] = $value;
    }

    public function getValue(){
        return $this->value;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>