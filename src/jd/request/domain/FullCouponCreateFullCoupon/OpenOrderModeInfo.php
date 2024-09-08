<?php
namespace FullCouponCreateFullCoupon;
class OpenOrderModeInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.orderpromo.OpenOrderModeInfo";
    }
        
    private $quota;
    
    public function setQuota($quota){
        $this->params['quota'] = $quota;
    }

    public function getQuota(){
        return $this->quota;
    }
            
    private $couponInfo;
            
    public function setCouponInfo($couponInfo){
        $this->params['couponInfo'] = $couponInfo ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>