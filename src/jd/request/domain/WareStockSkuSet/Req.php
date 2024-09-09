<?php

namespace JdJos\jd\request\domain\WareStockSkuSet;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.vendor.ware.shop.ohs.jos.req.stock.JosUpdateStockReq";
    }
        
    private $updateModel;
    
    public function setUpdateModel($updateModel){
        $this->params['updateModel'] = $updateModel;
    }

    public function getUpdateModel(){
        return $this->updateModel;
    }
            
    private $stockRfId;
    
    public function setStockRfId($stockRfId){
        $this->params['stockRfId'] = $stockRfId;
    }

    public function getStockRfId(){
        return $this->stockRfId;
    }
            
    private $skuStocks;
                                        
    public function setSkuStocks($skuStocks){
        $size = count($skuStocks);
        for ($i=0; $i<$size; $i++){
            $skuStocks [$i] = $skuStocks [$i] ->getInstance();
        }
        $this->params['skuStocks'] = $skuStocks;
    }
                                    
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
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