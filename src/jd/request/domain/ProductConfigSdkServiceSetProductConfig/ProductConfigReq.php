<?php
namespace ProductConfigSdkServiceSetProductConfig;
class ProductConfigReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.ivc.product.publish.sdk.dto.product.ProductConfigReq";
    }
        
    private $productConfigInfoDtoList;
                                        
    public function setProductConfigInfoDtoList($productConfigInfoDtoList){
        $size = count($productConfigInfoDtoList);
        for ($i=0; $i<$size; $i++){
            $productConfigInfoDtoList [$i] = $productConfigInfoDtoList [$i] ->getInstance();
        }
        $this->params['productConfigInfoDtoList'] = $productConfigInfoDtoList;
    }
                                    
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
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