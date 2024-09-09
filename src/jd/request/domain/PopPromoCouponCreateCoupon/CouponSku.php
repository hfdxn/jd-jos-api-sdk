<?php

namespace JdJos\jd\request\domain\PopPromoCouponCreateCoupon;
class CouponSku{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.coupon.CouponSku";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>