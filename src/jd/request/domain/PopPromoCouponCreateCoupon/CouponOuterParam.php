<?php
namespace PopPromoCouponCreateCoupon;
class CouponOuterParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.coupon.CouponOuterParam";
    }
        
    private $wareChoseType;
    
    public function setWareChoseType($wareChoseType){
        $this->params['wareChoseType'] = $wareChoseType;
    }

    public function getWareChoseType(){
        return $this->wareChoseType;
    }
            
    private $validityType;
    
    public function setValidityType($validityType){
        $this->params['validityType'] = $validityType;
    }

    public function getValidityType(){
        return $this->validityType;
    }
            
    private $takeRule;
    
    public function setTakeRule($takeRule){
        $this->params['takeRule'] = $takeRule;
    }

    public function getTakeRule(){
        return $this->takeRule;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $stairs;
                                        
    public function setStairs($stairs){
        $size = count($stairs);
        for ($i=0; $i<$size; $i++){
            $stairs [$i] = $stairs [$i] ->getInstance();
        }
        $this->params['stairs'] = $stairs;
    }
                                    
            
    private $style;
    
    public function setStyle($style){
        $this->params['style'] = $style;
    }

    public function getStyle(){
        return $this->style;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $mainDiscount;
    
    public function setMainDiscount($mainDiscount){
        $this->params['mainDiscount'] = $mainDiscount;
    }

    public function getMainDiscount(){
        return $this->mainDiscount;
    }
            
    private $takeEndTime;
    
    public function setTakeEndTime($takeEndTime){
        $this->params['takeEndTime'] = $takeEndTime;
    }

    public function getTakeEndTime(){
        return $this->takeEndTime;
    }
            
    private $beginTime;
    
    public function setBeginTime($beginTime){
        $this->params['beginTime'] = $beginTime;
    }

    public function getBeginTime(){
        return $this->beginTime;
    }
            
    private $display;
    
    public function setDisplay($display){
        $this->params['display'] = $display;
    }

    public function getDisplay(){
        return $this->display;
    }
            
    private $activityLink;
    
    public function setActivityLink($activityLink){
        $this->params['activityLink'] = $activityLink;
    }

    public function getActivityLink(){
        return $this->activityLink;
    }
            
    private $officialType;
    
    public function setOfficialType($officialType){
        $this->params['officialType'] = $officialType;
    }

    public function getOfficialType(){
        return $this->officialType;
    }
            
    private $takeNum;
    
    public function setTakeNum($takeNum){
        $this->params['takeNum'] = $takeNum;
    }

    public function getTakeNum(){
        return $this->takeNum;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $takeBeginTime;
    
    public function setTakeBeginTime($takeBeginTime){
        $this->params['takeBeginTime'] = $takeBeginTime;
    }

    public function getTakeBeginTime(){
        return $this->takeBeginTime;
    }
            
    private $days;
    
    public function setDays($days){
        $this->params['days'] = $days;
    }

    public function getDays(){
        return $this->days;
    }
            
    private $skus;
                                        
    public function setSkus($skus){
        $size = count($skus);
        for ($i=0; $i<$size; $i++){
            $skus [$i] = $skus [$i] ->getInstance();
        }
        $this->params['skus'] = $skus;
    }
                                    
            
    private $high;
    
    public function setHigh($high){
        $this->params['high'] = $high;
    }

    public function getHigh(){
        return $this->high;
    }
            
    private $spus;
                                        
    public function setSpus($spus){
        $size = count($spus);
        for ($i=0; $i<$size; $i++){
            $spus [$i] = $spus [$i] ->getInstance();
        }
        $this->params['spus'] = $spus;
    }
                                    
            
    private $shareType;
    
    public function setShareType($shareType){
        $this->params['shareType'] = $shareType;
    }

    public function getShareType(){
        return $this->shareType;
    }
            
    private $mainQuota;
    
    public function setMainQuota($mainQuota){
        $this->params['mainQuota'] = $mainQuota;
    }

    public function getMainQuota(){
        return $this->mainQuota;
    }
            
    private $promoteChannel;
    
    public function setPromoteChannel($promoteChannel){
        $this->params['promoteChannel'] = $promoteChannel;
    }

    public function getPromoteChannel(){
        return $this->promoteChannel;
    }
            
    private $busiCode;
    
    public function setBusiCode($busiCode){
        $this->params['busiCode'] = $busiCode;
    }

    public function getBusiCode(){
        return $this->busiCode;
    }
            
    private $busiPlatformParam;
            
    public function setBusiPlatformParam($busiPlatformParam){
        $this->params['busiPlatformParam'] = $busiPlatformParam ->getInstance();
    }
        
            
    private $memberParam;
            
    public function setMemberParam($memberParam){
        $this->params['memberParam'] = $memberParam ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>