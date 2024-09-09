<?php

namespace JdJos\jd\request\domain\MarketToolPresaleCreate;
class Attribute3{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.presale.api.domain.PresaleSkuInfo";
    }
        
    private $stepTwoNumber;
    
    public function setStepTwoNumber($stepTwoNumber){
        $this->params['stepTwoNumber'] = $stepTwoNumber;
    }

    public function getStepTwoNumber(){
        return $this->stepTwoNumber;
    }
            
    private $depositWorth;
    
    public function setDepositWorth($depositWorth){
        $this->params['depositWorth'] = $depositWorth;
    }

    public function getDepositWorth(){
        return $this->depositWorth;
    }
            
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $stepThreeNumber;
    
    public function setStepThreeNumber($stepThreeNumber){
        $this->params['stepThreeNumber'] = $stepThreeNumber;
    }

    public function getStepThreeNumber(){
        return $this->stepThreeNumber;
    }
            
    private $stepOneNumber;
    
    public function setStepOneNumber($stepOneNumber){
        $this->params['stepOneNumber'] = $stepOneNumber;
    }

    public function getStepOneNumber(){
        return $this->stepOneNumber;
    }
            
    private $stepThreePrice;
    
    public function setStepThreePrice($stepThreePrice){
        $this->params['stepThreePrice'] = $stepThreePrice;
    }

    public function getStepThreePrice(){
        return $this->stepThreePrice;
    }
            
    private $stepTwoPrice;
    
    public function setStepTwoPrice($stepTwoPrice){
        $this->params['stepTwoPrice'] = $stepTwoPrice;
    }

    public function getStepTwoPrice(){
        return $this->stepTwoPrice;
    }
            
    private $oriPrice;
    
    public function setOriPrice($oriPrice){
        $this->params['oriPrice'] = $oriPrice;
    }

    public function getOriPrice(){
        return $this->oriPrice;
    }
            
    private $stepOnePrice;
    
    public function setStepOnePrice($stepOnePrice){
        $this->params['stepOnePrice'] = $stepOnePrice;
    }

    public function getStepOnePrice(){
        return $this->stepOnePrice;
    }
            
    private $earnest;
    
    public function setEarnest($earnest){
        $this->params['earnest'] = $earnest;
    }

    public function getEarnest(){
        return $this->earnest;
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