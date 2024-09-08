<?php
namespace CarNotifyChargeStatus;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.order.entity.NotifyChargeStatusRequest";
    }
        
    private $SeviceMoney;
    
    public function setSeviceMoney($SeviceMoney){
        $this->params['SeviceMoney'] = $SeviceMoney;
    }

    public function getSeviceMoney(){
        return $this->SeviceMoney;
    }
            
    private $EndTime;
    
    public function setEndTime($EndTime){
        $this->params['EndTime'] = $EndTime;
    }

    public function getEndTime(){
        return $this->EndTime;
    }
            
    private $SumPeriod;
    
    public function setSumPeriod($SumPeriod){
        $this->params['SumPeriod'] = $SumPeriod;
    }

    public function getSumPeriod(){
        return $this->SumPeriod;
    }
            
    private $Soc;
    
    public function setSoc($Soc){
        $this->params['Soc'] = $Soc;
    }

    public function getSoc(){
        return $this->Soc;
    }
            
    private $ConnectorStatus;
    
    public function setConnectorStatus($ConnectorStatus){
        $this->params['ConnectorStatus'] = $ConnectorStatus;
    }

    public function getConnectorStatus(){
        return $this->ConnectorStatus;
    }
            
    private $StartTime;
    
    public function setStartTime($StartTime){
        $this->params['StartTime'] = $StartTime;
    }

    public function getStartTime(){
        return $this->StartTime;
    }
            
    private $CurrentC;
    
    public function setCurrentC($CurrentC){
        $this->params['CurrentC'] = $CurrentC;
    }

    public function getCurrentC(){
        return $this->CurrentC;
    }
            
    private $ChargeDetails;
                                        
    public function setChargeDetails($ChargeDetails){
        $size = count($ChargeDetails);
        for ($i=0; $i<$size; $i++){
            $ChargeDetails [$i] = $ChargeDetails [$i] ->getInstance();
        }
        $this->params['ChargeDetails'] = $ChargeDetails;
    }
                                    
            
    private $CurrentA;
    
    public function setCurrentA($CurrentA){
        $this->params['CurrentA'] = $CurrentA;
    }

    public function getCurrentA(){
        return $this->CurrentA;
    }
            
    private $CurrentB;
    
    public function setCurrentB($CurrentB){
        $this->params['CurrentB'] = $CurrentB;
    }

    public function getCurrentB(){
        return $this->CurrentB;
    }
            
    private $VoltageB;
    
    public function setVoltageB($VoltageB){
        $this->params['VoltageB'] = $VoltageB;
    }

    public function getVoltageB(){
        return $this->VoltageB;
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
            
    private $VoltageC;
    
    public function setVoltageC($VoltageC){
        $this->params['VoltageC'] = $VoltageC;
    }

    public function getVoltageC(){
        return $this->VoltageC;
    }
            
    private $StartChargeSeqStat;
    
    public function setStartChargeSeqStat($StartChargeSeqStat){
        $this->params['StartChargeSeqStat'] = $StartChargeSeqStat;
    }

    public function getStartChargeSeqStat(){
        return $this->StartChargeSeqStat;
    }
            
    private $VoltageA;
    
    public function setVoltageA($VoltageA){
        $this->params['VoltageA'] = $VoltageA;
    }

    public function getVoltageA(){
        return $this->VoltageA;
    }
            
    private $TotalMoney;
    
    public function setTotalMoney($TotalMoney){
        $this->params['TotalMoney'] = $TotalMoney;
    }

    public function getTotalMoney(){
        return $this->TotalMoney;
    }
            
    private $ElecMoney;
    
    public function setElecMoney($ElecMoney){
        $this->params['ElecMoney'] = $ElecMoney;
    }

    public function getElecMoney(){
        return $this->ElecMoney;
    }
            
    private $ConnectorID;
    
    public function setConnectorID($ConnectorID){
        $this->params['ConnectorID'] = $ConnectorID;
    }

    public function getConnectorID(){
        return $this->ConnectorID;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>