<?php
namespace CarNotifyOrderInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.order.entity.NotifyOrderRequest";
    }
        
    private $TotalPower;
    
    public function setTotalPower($TotalPower){
        $this->params['TotalPower'] = $TotalPower;
    }

    public function getTotalPower(){
        return $this->TotalPower;
    }
            
    private $StartChargeSeq;
    
    public function setStartChargeSeq($StartChargeSeq){
        $this->params['StartChargeSeq'] = $StartChargeSeq;
    }

    public function getStartChargeSeq(){
        return $this->StartChargeSeq;
    }
            
    private $EndTime;
    
    public function setEndTime($EndTime){
        $this->params['EndTime'] = $EndTime;
    }

    public function getEndTime(){
        return $this->EndTime;
    }
            
    private $TotalSeviceMoney;
    
    public function setTotalSeviceMoney($TotalSeviceMoney){
        $this->params['TotalSeviceMoney'] = $TotalSeviceMoney;
    }

    public function getTotalSeviceMoney(){
        return $this->TotalSeviceMoney;
    }
            
    private $SumPeriod;
    
    public function setSumPeriod($SumPeriod){
        $this->params['SumPeriod'] = $SumPeriod;
    }

    public function getSumPeriod(){
        return $this->SumPeriod;
    }
            
    private $StartTime;
    
    public function setStartTime($StartTime){
        $this->params['StartTime'] = $StartTime;
    }

    public function getStartTime(){
        return $this->StartTime;
    }
            
    private $TotalElecMoney;
    
    public function setTotalElecMoney($TotalElecMoney){
        $this->params['TotalElecMoney'] = $TotalElecMoney;
    }

    public function getTotalElecMoney(){
        return $this->TotalElecMoney;
    }
            
    private $TotalMoney;
    
    public function setTotalMoney($TotalMoney){
        $this->params['TotalMoney'] = $TotalMoney;
    }

    public function getTotalMoney(){
        return $this->TotalMoney;
    }
            
    private $ChargeDetails;
                                        
    public function setChargeDetails($ChargeDetails){
        $size = count($ChargeDetails);
        for ($i=0; $i<$size; $i++){
            $ChargeDetails [$i] = $ChargeDetails [$i] ->getInstance();
        }
        $this->params['ChargeDetails'] = $ChargeDetails;
    }
                                    
            
    private $StopReason;
    
    public function setStopReason($StopReason){
        $this->params['StopReason'] = $StopReason;
    }

    public function getStopReason(){
        return $this->StopReason;
    }
            
    private $ConnectorID;
    
    public function setConnectorID($ConnectorID){
        $this->params['ConnectorID'] = $ConnectorID;
    }

    public function getConnectorID(){
        return $this->ConnectorID;
    }
            
    private $TotalOriginalElecMoney;
    
    public function setTotalOriginalElecMoney($TotalOriginalElecMoney){
        $this->params['TotalOriginalElecMoney'] = $TotalOriginalElecMoney;
    }

    public function getTotalOriginalElecMoney(){
        return $this->TotalOriginalElecMoney;
    }
            
    private $TotalOriginalSeviceMoney;
    
    public function setTotalOriginalSeviceMoney($TotalOriginalSeviceMoney){
        $this->params['TotalOriginalSeviceMoney'] = $TotalOriginalSeviceMoney;
    }

    public function getTotalOriginalSeviceMoney(){
        return $this->TotalOriginalSeviceMoney;
    }
            
    private $TotalOriginalMoney;
    
    public function setTotalOriginalMoney($TotalOriginalMoney){
        $this->params['TotalOriginalMoney'] = $TotalOriginalMoney;
    }

    public function getTotalOriginalMoney(){
        return $this->TotalOriginalMoney;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>