<?php
namespace JdhO2oStoreClientBatchQueryStorePOIs;
class StorePOIRequest{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.medicine.ds.api.baidu.dto.StorePOIRequest";
    }
        
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $pageNum;
    
    public function setPageNum($pageNum){
        $this->params['pageNum'] = $pageNum;
    }

    public function getPageNum(){
        return $this->pageNum;
    }
            
    private $cursorId;
    
    public function setCursorId($cursorId){
        $this->params['cursorId'] = $cursorId;
    }

    public function getCursorId(){
        return $this->cursorId;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>