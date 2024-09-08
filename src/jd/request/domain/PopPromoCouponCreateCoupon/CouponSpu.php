<?php
namespace PopPromoCouponCreateCoupon;
class CouponSpu{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.coupon.CouponSpu";
    }
        
    private $spuId;
    
    public function setSpuId($spuId){
        $this->params['spuId'] = $spuId;
    }

    public function getSpuId(){
        return $this->spuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>