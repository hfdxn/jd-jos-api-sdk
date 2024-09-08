<?php
namespace DraftSearchDrafts;
class JosSearchDraftParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.request.JosSearchDraftParam";
    }
        
    private $productIds;
                        
    public function setProductIds($productIds){
        $this->params['productIds'] = $productIds;
    }
                    
            
    private $productName;
    
    public function setProductName($productName){
        $this->params['productName'] = $productName;
    }

    public function getProductName(){
        return $this->productName;
    }
            
    private $draftComputeStatus;
                        
    public function setDraftComputeStatus($draftComputeStatus){
        $this->params['draftComputeStatus'] = $draftComputeStatus;
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
            
    private $startAuditTime;
    
    public function setStartAuditTime($startAuditTime){
        $this->params['startAuditTime'] = $startAuditTime;
    }

    public function getStartAuditTime(){
        return $this->startAuditTime;
    }
            
    private $endAuditTime;
    
    public function setEndAuditTime($endAuditTime){
        $this->params['endAuditTime'] = $endAuditTime;
    }

    public function getEndAuditTime(){
        return $this->endAuditTime;
    }
            
    private $startCreateTime;
    
    public function setStartCreateTime($startCreateTime){
        $this->params['startCreateTime'] = $startCreateTime;
    }

    public function getStartCreateTime(){
        return $this->startCreateTime;
    }
            
    private $endCreateTime;
    
    public function setEndCreateTime($endCreateTime){
        $this->params['endCreateTime'] = $endCreateTime;
    }

    public function getEndCreateTime(){
        return $this->endCreateTime;
    }
            
    private $startModified;
    
    public function setStartModified($startModified){
        $this->params['startModified'] = $startModified;
    }

    public function getStartModified(){
        return $this->startModified;
    }
            
    private $endModified;
    
    public function setEndModified($endModified){
        $this->params['endModified'] = $endModified;
    }

    public function getEndModified(){
        return $this->endModified;
    }
            
    private $isPm;
    
    public function setIsPm($isPm){
        $this->params['isPm'] = $isPm;
    }

    public function getIsPm(){
        return $this->isPm;
    }
            
    private $josOrderList;
                                        
    public function setJosOrderList($josOrderList){
        $size = count($josOrderList);
        for ($i=0; $i<$size; $i++){
            $josOrderList [$i] = $josOrderList [$i] ->getInstance();
        }
        $this->params['josOrderList'] = $josOrderList;
    }
                                    
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $josRemoteIp;
    
    public function setJosRemoteIp($josRemoteIp){
        $this->params['josRemoteIp'] = $josRemoteIp;
    }

    public function getJosRemoteIp(){
        return $this->josRemoteIp;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>