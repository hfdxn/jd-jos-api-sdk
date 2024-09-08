<?php
namespace JdhO2oStoreClientQueryStorePageDetailData;
class StoreDetailPageRequest{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.medicine.ds.api.baidu.dto.StorePageDetailRequest";
    }
        
    private $pointX;
    
    public function setPointX($pointX){
        $this->params['pointX'] = $pointX;
    }

    public function getPointX(){
        return $this->pointX;
    }
            
    private $pointY;
    
    public function setPointY($pointY){
        $this->params['pointY'] = $pointY;
    }

    public function getPointY(){
        return $this->pointY;
    }
            
    private $storeId;
    
    public function setStoreId($storeId){
        $this->params['storeId'] = $storeId;
    }

    public function getStoreId(){
        return $this->storeId;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $opUid;
    
    public function setOpUid($opUid){
        $this->params['opUid'] = $opUid;
    }

    public function getOpUid(){
        return $this->opUid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>