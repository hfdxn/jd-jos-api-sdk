<?php
namespace InteractCenterApiJosJosFansActivityWriteServiceCreateGiftActivityWithResult;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interact.center.api.domain.GiftRuleActivity";
    }
        
    private $batchKey;
    
    public function setBatchKey($batchKey){
        $this->params['batchKey'] = $batchKey;
    }

    public function getBatchKey(){
        return $this->batchKey;
    }
            
    private $skus;
                                        
    public function setSkus($skus){
        $size = count($skus);
        for ($i=0; $i<$size; $i++){
            $skus [$i] = $skus [$i] ->getInstance();
        }
        $this->params['skus'] = $skus;
    }
                                    
            
    private $expireType;
    
    public function setExpireType($expireType){
        $this->params['expireType'] = $expireType;
    }

    public function getExpireType(){
        return $this->expireType;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $prizeEndTimeStr;
    
    public function setPrizeEndTimeStr($prizeEndTimeStr){
        $this->params['prizeEndTimeStr'] = $prizeEndTimeStr;
    }

    public function getPrizeEndTimeStr(){
        return $this->prizeEndTimeStr;
    }
            
    private $discount;
    
    public function setDiscount($discount){
        $this->params['discount'] = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }
            
    private $prizeStartTimeStr;
    
    public function setPrizeStartTimeStr($prizeStartTimeStr){
        $this->params['prizeStartTimeStr'] = $prizeStartTimeStr;
    }

    public function getPrizeStartTimeStr(){
        return $this->prizeStartTimeStr;
    }
            
    private $couponId;
    
    public function setCouponId($couponId){
        $this->params['couponId'] = $couponId;
    }

    public function getCouponId(){
        return $this->couponId;
    }
            
    private $skuIds;
    
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds(){
        return $this->skuIds;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $prizeId;
    
    public function setPrizeId($prizeId){
        $this->params['prizeId'] = $prizeId;
    }

    public function getPrizeId(){
        return $this->prizeId;
    }
            
    private $putKey;
    
    public function setPutKey($putKey){
        $this->params['putKey'] = $putKey;
    }

    public function getPutKey(){
        return $this->putKey;
    }
            
    private $quota;
    
    public function setQuota($quota){
        $this->params['quota'] = $quota;
    }

    public function getQuota(){
        return $this->quota;
    }
            
    private $prizeEndTime;
    
    public function setPrizeEndTime($prizeEndTime){
        $this->params['prizeEndTime'] = $prizeEndTime;
    }

    public function getPrizeEndTime(){
        return $this->prizeEndTime;
    }
            
    private $validateDay;
    
    public function setValidateDay($validateDay){
        $this->params['validateDay'] = $validateDay;
    }

    public function getValidateDay(){
        return $this->validateDay;
    }
            
    private $drawCount;
    
    public function setDrawCount($drawCount){
        $this->params['drawCount'] = $drawCount;
    }

    public function getDrawCount(){
        return $this->drawCount;
    }
            
    private $rfId;
    
    public function setRfId($rfId){
        $this->params['rfId'] = $rfId;
    }

    public function getRfId(){
        return $this->rfId;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $promoId;
    
    public function setPromoId($promoId){
        $this->params['promoId'] = $promoId;
    }

    public function getPromoId(){
        return $this->promoId;
    }
            
    private $beginTime;
    
    public function setBeginTime($beginTime){
        $this->params['beginTime'] = $beginTime;
    }

    public function getBeginTime(){
        return $this->beginTime;
    }
            
    private $prizeStartTime;
    
    public function setPrizeStartTime($prizeStartTime){
        $this->params['prizeStartTime'] = $prizeStartTime;
    }

    public function getPrizeStartTime(){
        return $this->prizeStartTime;
    }
            
    private $riskValue;
    
    public function setRiskValue($riskValue){
        $this->params['riskValue'] = $riskValue;
    }

    public function getRiskValue(){
        return $this->riskValue;
    }
            
    private $collectTimes;
    
    public function setCollectTimes($collectTimes){
        $this->params['collectTimes'] = $collectTimes;
    }

    public function getCollectTimes(){
        return $this->collectTimes;
    }
            
    private $prizeType;
    
    public function setPrizeType($prizeType){
        $this->params['prizeType'] = $prizeType;
    }

    public function getPrizeType(){
        return $this->prizeType;
    }
            
    private $floatRatio;
    
    public function setFloatRatio($floatRatio){
        $this->params['floatRatio'] = $floatRatio;
    }

    public function getFloatRatio(){
        return $this->floatRatio;
    }
            
    private $sendCount;
    
    public function setSendCount($sendCount){
        $this->params['sendCount'] = $sendCount;
    }

    public function getSendCount(){
        return $this->sendCount;
    }
            
    private $prizeLevel;
    
    public function setPrizeLevel($prizeLevel){
        $this->params['prizeLevel'] = $prizeLevel;
    }

    public function getPrizeLevel(){
        return $this->prizeLevel;
    }
            
    private $endTimeStr;
    
    public function setEndTimeStr($endTimeStr){
        $this->params['endTimeStr'] = $endTimeStr;
    }

    public function getEndTimeStr(){
        return $this->endTimeStr;
    }
            
    private $days;
    
    public function setDays($days){
        $this->params['days'] = $days;
    }

    public function getDays(){
        return $this->days;
    }
            
    private $beginTimeStr;
    
    public function setBeginTimeStr($beginTimeStr){
        $this->params['beginTimeStr'] = $beginTimeStr;
    }

    public function getBeginTimeStr(){
        return $this->beginTimeStr;
    }
            
    private $sharePersonCount;
    
    public function setSharePersonCount($sharePersonCount){
        $this->params['sharePersonCount'] = $sharePersonCount;
    }

    public function getSharePersonCount(){
        return $this->sharePersonCount;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $desc;
    
    public function setDesc($desc){
        $this->params['desc'] = $desc;
    }

    public function getDesc(){
        return $this->desc;
    }
            
    private $awardType;
    
    public function setAwardType($awardType){
        $this->params['awardType'] = $awardType;
    }

    public function getAwardType(){
        return $this->awardType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>