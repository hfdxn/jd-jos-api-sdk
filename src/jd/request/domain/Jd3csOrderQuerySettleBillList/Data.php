<?php

namespace JdJos\jd\request\domain\Jd3csOrderQuerySettleBillList;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SettleSearchParam";
    }
        
    private $itemCatIds;
                        
    public function setItemCatIds($itemCatIds){
        $this->params['itemCatIds'] = $itemCatIds;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>