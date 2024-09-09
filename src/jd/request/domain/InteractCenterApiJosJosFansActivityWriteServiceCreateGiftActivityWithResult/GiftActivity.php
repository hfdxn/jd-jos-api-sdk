<?php

namespace JdJos\jd\request\domain\InteractCenterApiJosJosFansActivityWriteServiceCreateGiftActivityWithResult;
class GiftActivity{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interact.center.api.domain.GiftActivity";
    }
        
    private $isPrize;
    
    public function setIsPrize($isPrize){
        $this->params['isPrize'] = $isPrize;
    }

    public function getIsPrize(){
        return $this->isPrize;
    }
            
    private $giftRuleActivityList;
                                        
    public function setGiftRuleActivityList($giftRuleActivityList){
        $size = count($giftRuleActivityList);
        for ($i=0; $i<$size; $i++){
            $giftRuleActivityList [$i] = $giftRuleActivityList [$i] ->getInstance();
        }
        $this->params['giftRuleActivityList'] = $giftRuleActivityList;
    }
                                    
            
    private $descInfo;
    
    public function setDescInfo($descInfo){
        $this->params['descInfo'] = $descInfo;
    }

    public function getDescInfo(){
        return $this->descInfo;
    }
            
    private $modifier;
    
    public function setModifier($modifier){
        $this->params['modifier'] = $modifier;
    }

    public function getModifier(){
        return $this->modifier;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $sourceLink;
    
    public function setSourceLink($sourceLink){
        $this->params['sourceLink'] = $sourceLink;
    }

    public function getSourceLink(){
        return $this->sourceLink;
    }
            
    private $isSinglePrize;
    
    public function setIsSinglePrize($isSinglePrize){
        $this->params['isSinglePrize'] = $isSinglePrize;
    }

    public function getIsSinglePrize(){
        return $this->isSinglePrize;
    }
            
    private $channel;
    
    public function setChannel($channel){
        $this->params['channel'] = $channel;
    }

    public function getChannel(){
        return $this->channel;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
            
    private $supplierCode;
    
    public function setSupplierCode($supplierCode){
        $this->params['supplierCode'] = $supplierCode;
    }

    public function getSupplierCode(){
        return $this->supplierCode;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $autoStop;
    
    public function setAutoStop($autoStop){
        $this->params['autoStop'] = $autoStop;
    }

    public function getAutoStop(){
        return $this->autoStop;
    }
            
    private $modified;
    
    public function setModified($modified){
        $this->params['modified'] = $modified;
    }

    public function getModified(){
        return $this->modified;
    }
            
    private $rfId;
    
    public function setRfId($rfId){
        $this->params['rfId'] = $rfId;
    }

    public function getRfId(){
        return $this->rfId;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $validate;
    
    public function setValidate($validate){
        $this->params['validate'] = $validate;
    }

    public function getValidate(){
        return $this->validate;
    }
            
    private $isEverydayAward;
    
    public function setIsEverydayAward($isEverydayAward){
        $this->params['isEverydayAward'] = $isEverydayAward;
    }

    public function getIsEverydayAward(){
        return $this->isEverydayAward;
    }
            
    private $creator;
    
    public function setCreator($creator){
        $this->params['creator'] = $creator;
    }

    public function getCreator(){
        return $this->creator;
    }
            
    private $subtitleName;
    
    public function setSubtitleName($subtitleName){
        $this->params['subtitleName'] = $subtitleName;
    }

    public function getSubtitleName(){
        return $this->subtitleName;
    }
            
    private $riskValue;
    
    public function setRiskValue($riskValue){
        $this->params['riskValue'] = $riskValue;
    }

    public function getRiskValue(){
        return $this->riskValue;
    }
            
    private $created;
    
    public function setCreated($created){
        $this->params['created'] = $created;
    }

    public function getCreated(){
        return $this->created;
    }
            
    private $taskIds;
    
    public function setTaskIds($taskIds){
        $this->params['taskIds'] = $taskIds;
    }

    public function getTaskIds(){
        return $this->taskIds;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $sourceCloseLink;
    
    public function setSourceCloseLink($sourceCloseLink){
        $this->params['sourceCloseLink'] = $sourceCloseLink;
    }

    public function getSourceCloseLink(){
        return $this->sourceCloseLink;
    }
            
    private $pictureLink;
    
    public function setPictureLink($pictureLink){
        $this->params['pictureLink'] = $pictureLink;
    }

    public function getPictureLink(){
        return $this->pictureLink;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $sourceName;
    
    public function setSourceName($sourceName){
        $this->params['sourceName'] = $sourceName;
    }

    public function getSourceName(){
        return $this->sourceName;
    }
            
    private $ext;
    
    public function setExt($ext){
        $this->params['ext'] = $ext;
    }

    public function getExt(){
        return $this->ext;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>