<?php

namespace JdJos\jd\request\domain\Jd3csOrderOrderConfirm;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.OrderStatusConfirmParam";
    }
        
    private $orderNos;
                        
    public function setOrderNos($orderNos){
        $this->params['orderNos'] = $orderNos;
    }
                    
            
    private $opType;
    
    public function setOpType($opType){
        $this->params['opType'] = $opType;
    }

    public function getOpType(){
        return $this->opType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>