<?php

namespace JdJos\jd\request\domain\Jd3csOrderSettleReconsider;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SettleReconsiderParam";
    }
        
    private $dealType;
    
    public function setDealType($dealType){
        $this->params['dealType'] = $dealType;
    }

    public function getDealType(){
        return $this->dealType;
    }
            
    private $invoiceNo;
    
    public function setInvoiceNo($invoiceNo){
        $this->params['invoiceNo'] = $invoiceNo;
    }

    public function getInvoiceNo(){
        return $this->invoiceNo;
    }
            
    private $dealRemark;
    
    public function setDealRemark($dealRemark){
        $this->params['dealRemark'] = $dealRemark;
    }

    public function getDealRemark(){
        return $this->dealRemark;
    }
            
    private $settleNo;
    
    public function setSettleNo($settleNo){
        $this->params['settleNo'] = $settleNo;
    }

    public function getSettleNo(){
        return $this->settleNo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>