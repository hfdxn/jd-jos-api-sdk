<?php
namespace FullCouponCreateFullCoupon;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.orderpromo.OpenOrderPromoInfo";
    }
        
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
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
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $link;
    
    public function setLink($link){
        $this->params['link'] = $link;
    }

    public function getLink(){
        return $this->link;
    }
            
    private $skuIds;
                        
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }
                    
            
    private $busiCode;
    
    public function setBusiCode($busiCode){
        $this->params['busiCode'] = $busiCode;
    }

    public function getBusiCode(){
        return $this->busiCode;
    }
            
    private $busiPlatform;
            
    public function setBusiPlatform($busiPlatform){
        $this->params['busiPlatform'] = $busiPlatform ->getInstance();
    }
        
            
    private $member;
            
    public function setMember($member){
        $this->params['member'] = $member ->getInstance();
    }
        
            
    private $orderModes;
                                        
    public function setOrderModes($orderModes){
        $size = count($orderModes);
        for ($i=0; $i<$size; $i++){
            $orderModes [$i] = $orderModes [$i] ->getInstance();
        }
        $this->params['orderModes'] = $orderModes;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>