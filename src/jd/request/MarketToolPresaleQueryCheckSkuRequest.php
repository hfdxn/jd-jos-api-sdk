<?php

namespace JdJos\jd\request;
class MarketToolPresaleQueryCheckSkuRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.tool.presale.query.checkSku";
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
                                                        		                                    	                                                                        		                                    	                   			private $shipTime;
    	                        
	public function setShipTime($shipTime){
		$this->shipTime = $shipTime;
         $this->apiParas["shipTime"] = $shipTime;
	}

	public function getShipTime(){
	  return $this->shipTime;
	}

                        	                        	                   			private $mergePay;
    	                        
	public function setMergePay($mergePay){
		$this->mergePay = $mergePay;
         $this->apiParas["mergePay"] = $mergePay;
	}

	public function getMergePay(){
	  return $this->mergePay;
	}

                        	                   			private $presaleStartTime;
    	                        
	public function setPresaleStartTime($presaleStartTime){
		$this->presaleStartTime = $presaleStartTime;
         $this->apiParas["presaleStartTime"] = $presaleStartTime;
	}

	public function getPresaleStartTime(){
	  return $this->presaleStartTime;
	}

                        	                   			private $hidePrice;
    	                        
	public function setHidePrice($hidePrice){
		$this->hidePrice = $hidePrice;
         $this->apiParas["hidePrice"] = $hidePrice;
	}

	public function getHidePrice(){
	  return $this->hidePrice;
	}

                        	                   			private $balanceStartTime;
    	                        
	public function setBalanceStartTime($balanceStartTime){
		$this->balanceStartTime = $balanceStartTime;
         $this->apiParas["balanceStartTime"] = $balanceStartTime;
	}

	public function getBalanceStartTime(){
	  return $this->balanceStartTime;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                                            		                                                             	                        	                                                                                                                                                                                                                                                                                        private $attribute5;
                              public function setAttribute5($attribute5 ){
                 $this->attribute5=$attribute5;
                 $this->apiParas["attribute5"] = $attribute5;
              }

              public function getAttribute5(){
              	return $this->attribute5;
              }
                                                                                                                                        	                   			private $selectType;
    	                        
	public function setSelectType($selectType){
		$this->selectType = $selectType;
         $this->apiParas["selectType"] = $selectType;
	}

	public function getSelectType(){
	  return $this->selectType;
	}

                                                    	                   			private $balanceHours;
    	                        
	public function setBalanceHours($balanceHours){
		$this->balanceHours = $balanceHours;
         $this->apiParas["balanceHours"] = $balanceHours;
	}

	public function getBalanceHours(){
	  return $this->balanceHours;
	}

                        	                   			private $payType;
    	                        
	public function setPayType($payType){
		$this->payType = $payType;
         $this->apiParas["payType"] = $payType;
	}

	public function getPayType(){
	  return $this->payType;
	}

                        	                   			private $presaleEndTime;
    	                        
	public function setPresaleEndTime($presaleEndTime){
		$this->presaleEndTime = $presaleEndTime;
         $this->apiParas["presaleEndTime"] = $presaleEndTime;
	}

	public function getPresaleEndTime(){
	  return $this->presaleEndTime;
	}

                        	                   			private $discountType;
    	                        
	public function setDiscountType($discountType){
		$this->discountType = $discountType;
         $this->apiParas["discountType"] = $discountType;
	}

	public function getDiscountType(){
	  return $this->discountType;
	}

                            }





        
 

