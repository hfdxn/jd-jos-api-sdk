<?php
class MarketToolCouponApiServiceCouponWriteOuterServiceCreateCouponRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.coupon.api.service.CouponWriteOuterService.createCoupon";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $wareGrade;
    	                        
	public function setWareGrade($wareGrade){
		$this->wareGrade = $wareGrade;
         $this->apiParas["wareGrade"] = $wareGrade;
	}

	public function getWareGrade(){
	  return $this->wareGrade;
	}

                        	                   			private $num;
    	                        
	public function setNum($num){
		$this->num = $num;
         $this->apiParas["num"] = $num;
	}

	public function getNum(){
	  return $this->num;
	}

                        	                   			private $discount;
    	                        
	public function setDiscount($discount){
		$this->discount = $discount;
         $this->apiParas["discount"] = $discount;
	}

	public function getDiscount(){
	  return $this->discount;
	}

                        	                   			private $strategyParam;
    	                        
	public function setStrategyParam($strategyParam){
		$this->strategyParam = $strategyParam;
         $this->apiParas["strategyParam"] = $strategyParam;
	}

	public function getStrategyParam(){
	  return $this->strategyParam;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuIdList;
                              public function setSkuIdList($skuIdList ){
                 $this->skuIdList=$skuIdList;
                 $this->apiParas["skuIdList"] = $skuIdList;
              }

              public function getSkuIdList(){
              	return $this->skuIdList;
              }
                                                                                                                                        	                   			private $couponId;
    	                        
	public function setCouponId($couponId){
		$this->couponId = $couponId;
         $this->apiParas["couponId"] = $couponId;
	}

	public function getCouponId(){
	  return $this->couponId;
	}

                        	                   			private $shareType;
    	                        
	public function setShareType($shareType){
		$this->shareType = $shareType;
         $this->apiParas["shareType"] = $shareType;
	}

	public function getShareType(){
	  return $this->shareType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                        	                   			private $takeEndTime;
    	                        
	public function setTakeEndTime($takeEndTime){
		$this->takeEndTime = $takeEndTime;
         $this->apiParas["takeEndTime"] = $takeEndTime;
	}

	public function getTakeEndTime(){
	  return $this->takeEndTime;
	}

                        	                   			private $high;
    	                        
	public function setHigh($high){
		$this->high = $high;
         $this->apiParas["high"] = $high;
	}

	public function getHigh(){
	  return $this->high;
	}

                        	                   			private $takeNum;
    	                        
	public function setTakeNum($takeNum){
		$this->takeNum = $takeNum;
         $this->apiParas["takeNum"] = $takeNum;
	}

	public function getTakeNum(){
	  return $this->takeNum;
	}

                        	                   			private $quota;
    	                        
	public function setQuota($quota){
		$this->quota = $quota;
         $this->apiParas["quota"] = $quota;
	}

	public function getQuota(){
	  return $this->quota;
	}

                        	                   			private $officialType;
    	                        
	public function setOfficialType($officialType){
		$this->officialType = $officialType;
         $this->apiParas["officialType"] = $officialType;
	}

	public function getOfficialType(){
	  return $this->officialType;
	}

                        	                   			private $beginTime;
    	                        
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["beginTime"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $promoteChannel;
    	                        
	public function setPromoteChannel($promoteChannel){
		$this->promoteChannel = $promoteChannel;
         $this->apiParas["promoteChannel"] = $promoteChannel;
	}

	public function getPromoteChannel(){
	  return $this->promoteChannel;
	}

                        	                   			private $remainNum;
    	                        
	public function setRemainNum($remainNum){
		$this->remainNum = $remainNum;
         $this->apiParas["remainNum"] = $remainNum;
	}

	public function getRemainNum(){
	  return $this->remainNum;
	}

                        	                   			private $storeType;
    	                        
	public function setStoreType($storeType){
		$this->storeType = $storeType;
         $this->apiParas["storeType"] = $storeType;
	}

	public function getStoreType(){
	  return $this->storeType;
	}

                        	                   			private $display;
    	                        
	public function setDisplay($display){
		$this->display = $display;
         $this->apiParas["display"] = $display;
	}

	public function getDisplay(){
	  return $this->display;
	}

                        	                   			private $busiCode;
    	                        
	public function setBusiCode($busiCode){
		$this->busiCode = $busiCode;
         $this->apiParas["busiCode"] = $busiCode;
	}

	public function getBusiCode(){
	  return $this->busiCode;
	}

                        	                   			private $wareChoseType;
    	                        
	public function setWareChoseType($wareChoseType){
		$this->wareChoseType = $wareChoseType;
         $this->apiParas["wareChoseType"] = $wareChoseType;
	}

	public function getWareChoseType(){
	  return $this->wareChoseType;
	}

                                            		                                    	                   			private $userClass;
    	                        
	public function setUserClass($userClass){
		$this->userClass = $userClass;
         $this->apiParas["userClass"] = $userClass;
	}

	public function getUserClass(){
	  return $this->userClass;
	}

                        	                   			private $userLevel;
    	                        
	public function setUserLevel($userLevel){
		$this->userLevel = $userLevel;
         $this->apiParas["userLevel"] = $userLevel;
	}

	public function getUserLevel(){
	  return $this->userLevel;
	}

                                                    	                   			private $takeBeginTime;
    	                        
	public function setTakeBeginTime($takeBeginTime){
		$this->takeBeginTime = $takeBeginTime;
         $this->apiParas["takeBeginTime"] = $takeBeginTime;
	}

	public function getTakeBeginTime(){
	  return $this->takeBeginTime;
	}

                        	                   			private $validityType;
    	                        
	public function setValidityType($validityType){
		$this->validityType = $validityType;
         $this->apiParas["validityType"] = $validityType;
	}

	public function getValidityType(){
	  return $this->validityType;
	}

                        	                   			private $takeRule;
    	                        
	public function setTakeRule($takeRule){
		$this->takeRule = $takeRule;
         $this->apiParas["takeRule"] = $takeRule;
	}

	public function getTakeRule(){
	  return $this->takeRule;
	}

                        	                   			private $hourCoupon;
    	                        
	public function setHourCoupon($hourCoupon){
		$this->hourCoupon = $hourCoupon;
         $this->apiParas["hourCoupon"] = $hourCoupon;
	}

	public function getHourCoupon(){
	  return $this->hourCoupon;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $activityLink;
    	                        
	public function setActivityLink($activityLink){
		$this->activityLink = $activityLink;
         $this->apiParas["activityLink"] = $activityLink;
	}

	public function getActivityLink(){
	  return $this->activityLink;
	}

                        	                   			private $days;
    	                        
	public function setDays($days){
		$this->days = $days;
         $this->apiParas["days"] = $days;
	}

	public function getDays(){
	  return $this->days;
	}

                        	                   			private $style;
    	                        
	public function setStyle($style){
		$this->style = $style;
         $this->apiParas["style"] = $style;
	}

	public function getStyle(){
	  return $this->style;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $adWord;
    	                        
	public function setAdWord($adWord){
		$this->adWord = $adWord;
         $this->apiParas["adWord"] = $adWord;
	}

	public function getAdWord(){
	  return $this->adWord;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $spuIdList;
                              public function setSpuIdList($spuIdList ){
                 $this->spuIdList=$spuIdList;
                 $this->apiParas["spuIdList"] = $spuIdList;
              }

              public function getSpuIdList(){
              	return $this->spuIdList;
              }
                                                                                                                                                            		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $channels;
                              public function setChannels($channels ){
                 $this->channels=$channels;
                 $this->apiParas["channels"] = $channels;
              }

              public function getChannels(){
              	return $this->channels;
              }
                                                                                                                                        	                   			private $channelSelectType;
    	                        
	public function setChannelSelectType($channelSelectType){
		$this->channelSelectType = $channelSelectType;
         $this->apiParas["channelSelectType"] = $channelSelectType;
	}

	public function getChannelSelectType(){
	  return $this->channelSelectType;
	}

                        	                   			private $selectType;
    	                        
	public function setSelectType($selectType){
		$this->selectType = $selectType;
         $this->apiParas["selectType"] = $selectType;
	}

	public function getSelectType(){
	  return $this->selectType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $platforms;
                              public function setPlatforms($platforms ){
                 $this->platforms=$platforms;
                 $this->apiParas["platforms"] = $platforms;
              }

              public function getPlatforms(){
              	return $this->platforms;
              }
                                                                                                                                                                                                	                        	                                            		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                                    	                        	}





        
 

