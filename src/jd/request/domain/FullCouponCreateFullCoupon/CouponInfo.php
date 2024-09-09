<?php

namespace JdJos\jd\request\domain\FullCouponCreateFullCoupon;
class CouponInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.orderpromo.OpenPromoCouponInfo";
    }
        
    private $couponQuota;
    
    public function setCouponQuota($couponQuota){
        $this->params['couponQuota'] = $couponQuota;
    }

    public function getCouponQuota(){
        return $this->couponQuota;
    }
            
    private $discount;
    
    public function setDiscount($discount){
        $this->params['discount'] = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }
            
    private $validateDays;
    
    public function setValidateDays($validateDays){
        $this->params['validateDays'] = $validateDays;
    }

    public function getValidateDays(){
        return $this->validateDays;
    }
            
    private $couponType;
    
    public function setCouponType($couponType){
        $this->params['couponType'] = $couponType;
    }

    public function getCouponType(){
        return $this->couponType;
    }
            
    private $orderDoneTime;
    
    public function setOrderDoneTime($orderDoneTime){
        $this->params['orderDoneTime'] = $orderDoneTime;
    }

    public function getOrderDoneTime(){
        return $this->orderDoneTime;
    }
            
    private $limitFirstOrder;
    
    public function setLimitFirstOrder($limitFirstOrder){
        $this->params['limitFirstOrder'] = $limitFirstOrder;
    }

    public function getLimitFirstOrder(){
        return $this->limitFirstOrder;
    }
            
    private $orderDayLimit;
    
    public function setOrderDayLimit($orderDayLimit){
        $this->params['orderDayLimit'] = $orderDayLimit;
    }

    public function getOrderDayLimit(){
        return $this->orderDayLimit;
    }
            
    private $validityType;
    
    public function setValidityType($validityType){
        $this->params['validityType'] = $validityType;
    }

    public function getValidityType(){
        return $this->validityType;
    }
            
    private $validBeginTime;
    
    public function setValidBeginTime($validBeginTime){
        $this->params['validBeginTime'] = $validBeginTime;
    }

    public function getValidBeginTime(){
        return $this->validBeginTime;
    }
            
    private $validEndTime;
    
    public function setValidEndTime($validEndTime){
        $this->params['validEndTime'] = $validEndTime;
    }

    public function getValidEndTime(){
        return $this->validEndTime;
    }
            
    private $storeNum;
    
    public function setStoreNum($storeNum){
        $this->params['storeNum'] = $storeNum;
    }

    public function getStoreNum(){
        return $this->storeNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>