<?php
namespace DraftCommitDraft;
class JosHouseSku{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.house.JosHouseSku";
    }
        
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $skuIcons;
                        
    public function setSkuIcons($skuIcons){
        $this->params['skuIcons'] = $skuIcons;
    }
                    
            
    private $skuLayout;
    
    public function setSkuLayout($skuLayout){
        $this->params['skuLayout'] = $skuLayout;
    }

    public function getSkuLayout(){
        return $this->skuLayout;
    }
            
    private $skuProfit;
    
    public function setSkuProfit($skuProfit){
        $this->params['skuProfit'] = $skuProfit;
    }

    public function getSkuProfit(){
        return $this->skuProfit;
    }
            
    private $skuGetRate;
    
    public function setSkuGetRate($skuGetRate){
        $this->params['skuGetRate'] = $skuGetRate;
    }

    public function getSkuGetRate(){
        return $this->skuGetRate;
    }
            
    private $skuAreaReal;
    
    public function setSkuAreaReal($skuAreaReal){
        $this->params['skuAreaReal'] = $skuAreaReal;
    }

    public function getSkuAreaReal(){
        return $this->skuAreaReal;
    }
            
    private $skuTotalAmt;
    
    public function setSkuTotalAmt($skuTotalAmt){
        $this->params['skuTotalAmt'] = $skuTotalAmt;
    }

    public function getSkuTotalAmt(){
        return $this->skuTotalAmt;
    }
            
    private $skuStatus;
    
    public function setSkuStatus($skuStatus){
        $this->params['skuStatus'] = $skuStatus;
    }

    public function getSkuStatus(){
        return $this->skuStatus;
    }
            
    private $skuAreaBuild;
    
    public function setSkuAreaBuild($skuAreaBuild){
        $this->params['skuAreaBuild'] = $skuAreaBuild;
    }

    public function getSkuAreaBuild(){
        return $this->skuAreaBuild;
    }
            
    private $skuDeveloperPay;
    
    public function setSkuDeveloperPay($skuDeveloperPay){
        $this->params['skuDeveloperPay'] = $skuDeveloperPay;
    }

    public function getSkuDeveloperPay(){
        return $this->skuDeveloperPay;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>