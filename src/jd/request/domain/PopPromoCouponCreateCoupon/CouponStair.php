<?php
namespace PopPromoCouponCreateCoupon;
class CouponStair{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.coupon.CouponStairParam";
    }
        
    private $quota;
    
    public function setQuota($quota){
        $this->params['quota'] = $quota;
    }

    public function getQuota(){
        return $this->quota;
    }
            
    private $discount;
    
    public function setDiscount($discount){
        $this->params['discount'] = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>