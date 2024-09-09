<?php

namespace JdJos\jd\request\domain\CarNotifyOrderInfo;
class Detail{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.order.entity.NotifyChargeDetail";
    }
        
    private $DetailEndTime;
    
    public function setDetailEndTime($DetailEndTime){
        $this->params['DetailEndTime'] = $DetailEndTime;
    }

    public function getDetailEndTime(){
        return $this->DetailEndTime;
    }
            
    private $DetailSeviceMoney;
    
    public function setDetailSeviceMoney($DetailSeviceMoney){
        $this->params['DetailSeviceMoney'] = $DetailSeviceMoney;
    }

    public function getDetailSeviceMoney(){
        return $this->DetailSeviceMoney;
    }
            
    private $DetailStartTime;
    
    public function setDetailStartTime($DetailStartTime){
        $this->params['DetailStartTime'] = $DetailStartTime;
    }

    public function getDetailStartTime(){
        return $this->DetailStartTime;
    }
            
    private $ElecPrice;
    
    public function setElecPrice($ElecPrice){
        $this->params['ElecPrice'] = $ElecPrice;
    }

    public function getElecPrice(){
        return $this->ElecPrice;
    }
            
    private $DetailPower;
    
    public function setDetailPower($DetailPower){
        $this->params['DetailPower'] = $DetailPower;
    }

    public function getDetailPower(){
        return $this->DetailPower;
    }
            
    private $SevicePrice;
    
    public function setSevicePrice($SevicePrice){
        $this->params['SevicePrice'] = $SevicePrice;
    }

    public function getSevicePrice(){
        return $this->SevicePrice;
    }
            
    private $DetailElecMoney;
    
    public function setDetailElecMoney($DetailElecMoney){
        $this->params['DetailElecMoney'] = $DetailElecMoney;
    }

    public function getDetailElecMoney(){
        return $this->DetailElecMoney;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>