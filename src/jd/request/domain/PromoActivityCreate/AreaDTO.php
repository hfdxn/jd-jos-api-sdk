<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class AreaDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.AreaDTO";
    }
        
    private $areaBound;
    
    public function setAreaBound($areaBound){
        $this->params['areaBound'] = $areaBound;
    }

    public function getAreaBound(){
        return $this->areaBound;
    }
            
    private $area;
    
    public function setArea($area){
        $this->params['area'] = $area;
    }

    public function getArea(){
        return $this->area;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>