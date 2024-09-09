<?php

namespace JdJos\jd\request\domain\Jd3csOrderOrderFinish;
class AfterSalesInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.AfterSalesInfo";
    }
        
    private $guaranteeType;
    
    public function setGuaranteeType($guaranteeType){
        $this->params['guaranteeType'] = $guaranteeType;
    }

    public function getGuaranteeType(){
        return $this->guaranteeType;
    }
            
    private $repairType;
    
    public function setRepairType($repairType){
        $this->params['repairType'] = $repairType;
    }

    public function getRepairType(){
        return $this->repairType;
    }
            
    private $sparePartInfos;
                                        
    public function setSparePartInfos($sparePartInfos){
        $size = count($sparePartInfos);
        for ($i=0; $i<$size; $i++){
            $sparePartInfos [$i] = $sparePartInfos [$i] ->getInstance();
        }
        $this->params['sparePartInfos'] = $sparePartInfos;
    }
                                    
            
    private $applySpareParts;
    
    public function setApplySpareParts($applySpareParts){
        $this->params['applySpareParts'] = $applySpareParts;
    }

    public function getApplySpareParts(){
        return $this->applySpareParts;
    }
            
    private $detectResult;
    
    public function setDetectResult($detectResult){
        $this->params['detectResult'] = $detectResult;
    }

    public function getDetectResult(){
        return $this->detectResult;
    }
            
    private $detectDetail;
    
    public function setDetectDetail($detectDetail){
        $this->params['detectDetail'] = $detectDetail;
    }

    public function getDetectDetail(){
        return $this->detectDetail;
    }
            
    private $detectPic;
    
    public function setDetectPic($detectPic){
        $this->params['detectPic'] = $detectPic;
    }

    public function getDetectPic(){
        return $this->detectPic;
    }
            
    private $installSituation;
    
    public function setInstallSituation($installSituation){
        $this->params['installSituation'] = $installSituation;
    }

    public function getInstallSituation(){
        return $this->installSituation;
    }
            
    private $invoiceSituation;
    
    public function setInvoiceSituation($invoiceSituation){
        $this->params['invoiceSituation'] = $invoiceSituation;
    }

    public function getInvoiceSituation(){
        return $this->invoiceSituation;
    }
            
    private $warrantyCard;
    
    public function setWarrantyCard($warrantyCard){
        $this->params['warrantyCard'] = $warrantyCard;
    }

    public function getWarrantyCard(){
        return $this->warrantyCard;
    }
            
    private $outRepair;
    
    public function setOutRepair($outRepair){
        $this->params['outRepair'] = $outRepair;
    }

    public function getOutRepair(){
        return $this->outRepair;
    }
            
    private $chargeAmount;
    
    public function setChargeAmount($chargeAmount){
        $this->params['chargeAmount'] = $chargeAmount;
    }

    public function getChargeAmount(){
        return $this->chargeAmount;
    }
            
    private $usedMaterial;
    
    public function setUsedMaterial($usedMaterial){
        $this->params['usedMaterial'] = $usedMaterial;
    }

    public function getUsedMaterial(){
        return $this->usedMaterial;
    }
            
    private $barcode1;
    
    public function setBarcode1($barcode1){
        $this->params['barcode1'] = $barcode1;
    }

    public function getBarcode1(){
        return $this->barcode1;
    }
            
    private $barcode2;
    
    public function setBarcode2($barcode2){
        $this->params['barcode2'] = $barcode2;
    }

    public function getBarcode2(){
        return $this->barcode2;
    }
            
    private $purchaseTime;
    
    public function setPurchaseTime($purchaseTime){
        $this->params['purchaseTime'] = $purchaseTime;
    }

    public function getPurchaseTime(){
        return $this->purchaseTime;
    }
            
    private $machineCode;
    
    public function setMachineCode($machineCode){
        $this->params['machineCode'] = $machineCode;
    }

    public function getMachineCode(){
        return $this->machineCode;
    }
            
    private $repairObj;
    
    public function setRepairObj($repairObj){
        $this->params['repairObj'] = $repairObj;
    }

    public function getRepairObj(){
        return $this->repairObj;
    }
            
    private $failureName;
    
    public function setFailureName($failureName){
        $this->params['failureName'] = $failureName;
    }

    public function getFailureName(){
        return $this->failureName;
    }
            
    private $fixMethod;
    
    public function setFixMethod($fixMethod){
        $this->params['fixMethod'] = $fixMethod;
    }

    public function getFixMethod(){
        return $this->fixMethod;
    }
            
    private $failureReason;
    
    public function setFailureReason($failureReason){
        $this->params['failureReason'] = $failureReason;
    }

    public function getFailureReason(){
        return $this->failureReason;
    }
            
    private $failureTreeInfoList;
                                        
    public function setFailureTreeInfoList($failureTreeInfoList){
        $size = count($failureTreeInfoList);
        for ($i=0; $i<$size; $i++){
            $failureTreeInfoList [$i] = $failureTreeInfoList [$i] ->getInstance();
        }
        $this->params['failureTreeInfoList'] = $failureTreeInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>