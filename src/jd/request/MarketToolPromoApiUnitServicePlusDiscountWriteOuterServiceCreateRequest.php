<?php

namespace JdJos\jd\request;
class MarketToolPromoApiUnitServicePlusDiscountWriteOuterServiceCreateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.promo.api.unit.service.PlusDiscountWriteOuterService.create";
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
                                                        		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                                                                        		                                    	                   			private $bound;
    	                        
	public function setBound($bound){
		$this->bound = $bound;
         $this->apiParas["bound"] = $bound;
	}

	public function getBound(){
	  return $this->bound;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                        	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $member;
    	                        
	public function setMember($member){
		$this->member = $member;
         $this->apiParas["member"] = $member;
	}

	public function getMember(){
	  return $this->member;
	}

                        	                   			private $beginTime;
    	                        
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["beginTime"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $platForm;
    	                        
	public function setPlatForm($platForm){
		$this->platForm = $platForm;
         $this->apiParas["platForm"] = $platForm;
	}

	public function getPlatForm(){
	  return $this->platForm;
	}

                        	                   			private $plusDiscount;
    	                        
	public function setPlusDiscount($plusDiscount){
		$this->plusDiscount = $plusDiscount;
         $this->apiParas["plusDiscount"] = $plusDiscount;
	}

	public function getPlusDiscount(){
	  return $this->plusDiscount;
	}

                        	                   			private $promoType;
    	                        
	public function setPromoType($promoType){
		$this->promoType = $promoType;
         $this->apiParas["promoType"] = $promoType;
	}

	public function getPromoType(){
	  return $this->promoType;
	}

                        	                        	                            }





        
 

