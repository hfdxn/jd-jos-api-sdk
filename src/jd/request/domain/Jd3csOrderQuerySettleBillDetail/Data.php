<?php

namespace JdJos\jd\request\domain\Jd3csOrderQuerySettleBillDetail;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SettleBillDetailParam";
    }
        
    private $pageNo;
    
    public function setPageNo($pageNo){
        $this->params['pageNo'] = $pageNo;
    }

    public function getPageNo(){
        return $this->pageNo;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
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