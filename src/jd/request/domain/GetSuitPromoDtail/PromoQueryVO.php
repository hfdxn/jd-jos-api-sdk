<?php

namespace JdJos\jd\request\domain\GetSuitPromoDtail;
class PromoQueryVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.promo.api.common.domain.PromoQueryVO";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $promoId;
    
    public function setPromoId($promoId){
        $this->params['promoId'] = $promoId;
    }

    public function getPromoId(){
        return $this->promoId;
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