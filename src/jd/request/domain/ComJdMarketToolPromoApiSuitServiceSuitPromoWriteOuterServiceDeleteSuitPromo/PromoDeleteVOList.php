<?php

namespace JdJos\jd\request\domain\ComJdMarketToolPromoApiSuitServiceSuitPromoWriteOuterServiceDeleteSuitPromo;
class PromoDeleteVOList{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.promo.api.common.domain.PromoDeleteVO";
    }
        
    private $venderCode;
    
    public function setVenderCode($venderCode){
        $this->params['venderCode'] = $venderCode;
    }

    public function getVenderCode(){
        return $this->venderCode;
    }
            
    private $promoType;
    
    public function setPromoType($promoType){
        $this->params['promoType'] = $promoType;
    }

    public function getPromoType(){
        return $this->promoType;
    }
            
    private $promoId;
    
    public function setPromoId($promoId){
        $this->params['promoId'] = $promoId;
    }

    public function getPromoId(){
        return $this->promoId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>