<?php

namespace JdJos\jd\request;
class TwStopChargeCallbackRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.tw.stop.charge.callback";
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
                                    	                   			private $jdVenderId;
    	                        
	public function setJdVenderId($jdVenderId){
		$this->jdVenderId = $jdVenderId;
         $this->apiParas["jdVenderId"] = $jdVenderId;
	}

	public function getJdVenderId(){
	  return $this->jdVenderId;
	}

                                            		                                    	                   			private $powerCount;
    	                        
	public function setPowerCount($powerCount){
		$this->powerCount = $powerCount;
         $this->apiParas["powerCount"] = $powerCount;
	}

	public function getPowerCount(){
	  return $this->powerCount;
	}

                        	                   			private $totalServiceFee;
    	                        
	public function setTotalServiceFee($totalServiceFee){
		$this->totalServiceFee = $totalServiceFee;
         $this->apiParas["totalServiceFee"] = $totalServiceFee;
	}

	public function getTotalServiceFee(){
	  return $this->totalServiceFee;
	}

                        	                   			private $cardNum;
    	                        
	public function setCardNum($cardNum){
		$this->cardNum = $cardNum;
         $this->apiParas["cardNum"] = $cardNum;
	}

	public function getCardNum(){
	  return $this->cardNum;
	}

                        	                   			private $portNum;
    	                        
	public function setPortNum($portNum){
		$this->portNum = $portNum;
         $this->apiParas["portNum"] = $portNum;
	}

	public function getPortNum(){
	  return $this->portNum;
	}

                        	                   			private $endType;
    	                        
	public function setEndType($endType){
		$this->endType = $endType;
         $this->apiParas["endType"] = $endType;
	}

	public function getEndType(){
	  return $this->endType;
	}

                        	                   			private $payPrice;
    	                        
	public function setPayPrice($payPrice){
		$this->payPrice = $payPrice;
         $this->apiParas["payPrice"] = $payPrice;
	}

	public function getPayPrice(){
	  return $this->payPrice;
	}

                        	                   			private $totalElectricMoney;
    	                        
	public function setTotalElectricMoney($totalElectricMoney){
		$this->totalElectricMoney = $totalElectricMoney;
         $this->apiParas["totalElectricMoney"] = $totalElectricMoney;
	}

	public function getTotalElectricMoney(){
	  return $this->totalElectricMoney;
	}

                        	                   			private $orderNum;
    	                        
	public function setOrderNum($orderNum){
		$this->orderNum = $orderNum;
         $this->apiParas["orderNum"] = $orderNum;
	}

	public function getOrderNum(){
	  return $this->orderNum;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $deviceId;
    	                        
	public function setDeviceId($deviceId){
		$this->deviceId = $deviceId;
         $this->apiParas["deviceId"] = $deviceId;
	}

	public function getDeviceId(){
	  return $this->deviceId;
	}

                            }





        
 

