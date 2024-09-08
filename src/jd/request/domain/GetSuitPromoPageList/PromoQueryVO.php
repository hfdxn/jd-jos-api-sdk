<?php
namespace GetSuitPromoPageList;
class PromoQueryVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.promo.api.common.domain.PromoQueryVO";
    }
        
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $evtStatus;
    
    public function setEvtStatus($evtStatus){
        $this->params['evtStatus'] = $evtStatus;
    }

    public function getEvtStatus(){
        return $this->evtStatus;
    }
            
    private $evtType;
    
    public function setEvtType($evtType){
        $this->params['evtType'] = $evtType;
    }

    public function getEvtType(){
        return $this->evtType;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
    }
            
    private $evtName;
    
    public function setEvtName($evtName){
        $this->params['evtName'] = $evtName;
    }

    public function getEvtName(){
        return $this->evtName;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $open_id_seller;
    
    public function setOpen_id_seller($open_id_seller){
        $this->params['open_id_seller'] = $open_id_seller;
    }

    public function getOpen_id_seller(){
        return $this->open_id_seller;
    }
            
    private $xid_seller;
    
    public function setXid_seller($xid_seller){
        $this->params['xid_seller'] = $xid_seller;
    }

    public function getXid_seller(){
        return $this->xid_seller;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>