<?php

namespace JdJos\jd\request\domain\InteractiveQueryInteractiveRewardInfo;
class Ext{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $detailTypeFlag;
    
    public function setDetailTypeFlag($detailTypeFlag){
        $this->params['detailTypeFlag'] = $detailTypeFlag;
    }

    public function getDetailTypeFlag(){
        return $this->detailTypeFlag;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>