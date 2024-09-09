<?php

namespace JdJos\jd\request\domain\DraftSearchDrafts;
class JosOrder{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.JosOrderby";
    }
        
    private $orderField;
    
    public function setOrderField($orderField){
        $this->params['orderField'] = $orderField;
    }

    public function getOrderField(){
        return $this->orderField;
    }
            
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>