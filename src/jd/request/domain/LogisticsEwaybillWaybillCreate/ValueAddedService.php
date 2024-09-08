<?php
namespace LogisticsEwaybillWaybillCreate;
class ValueAddedService{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ldop.alpha.waybill.api.dto.waybill.ValueAddedService";
    }
        
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $attributes;
                                        
    public function setAttributes($attributes){
        $size = count($attributes);
        for ($i=0; $i<$size; $i++){
            $attributes [$i] = $attributes [$i] ->getInstance();
        }
        $this->params['attributes'] = $attributes;
    }
                                    
            
    private $productCodes;
                        
    public function setProductCodes($productCodes){
        $this->params['productCodes'] = $productCodes;
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