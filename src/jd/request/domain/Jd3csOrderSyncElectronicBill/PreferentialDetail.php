<?php

namespace JdJos\jd\request\domain\Jd3csOrderSyncElectronicBill;
class PreferentialDetail{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.ElectronicBillPreferentialDetail";
    }
        
    private $singlePreferentialAmount;
    
    public function setSinglePreferentialAmount($singlePreferentialAmount){
        $this->params['singlePreferentialAmount'] = $singlePreferentialAmount;
    }

    public function getSinglePreferentialAmount(){
        return $this->singlePreferentialAmount;
    }
            
    private $singlePreferentialName;
    
    public function setSinglePreferentialName($singlePreferentialName){
        $this->params['singlePreferentialName'] = $singlePreferentialName;
    }

    public function getSinglePreferentialName(){
        return $this->singlePreferentialName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>