<?php

namespace JdJos\jd\request;
class HomefwLogisticsCargoCollectV2Request
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.logistics.cargoCollectV2";
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
                                    	                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $logisticsNoExt;
    	                        
	public function setLogisticsNoExt($logisticsNoExt){
		$this->logisticsNoExt = $logisticsNoExt;
         $this->apiParas["logisticsNoExt"] = $logisticsNoExt;
	}

	public function getLogisticsNoExt(){
	  return $this->logisticsNoExt;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $siteType;
    	                        
	public function setSiteType($siteType){
		$this->siteType = $siteType;
         $this->apiParas["siteType"] = $siteType;
	}

	public function getSiteType(){
	  return $this->siteType;
	}

                        	                   			private $siteCode;
    	                        
	public function setSiteCode($siteCode){
		$this->siteCode = $siteCode;
         $this->apiParas["siteCode"] = $siteCode;
	}

	public function getSiteCode(){
	  return $this->siteCode;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $baseCost;
    	                        
	public function setBaseCost($baseCost){
		$this->baseCost = $baseCost;
         $this->apiParas["baseCost"] = $baseCost;
	}

	public function getBaseCost(){
	  return $this->baseCost;
	}

                        	                   			private $getCost;
    	                        
	public function setGetCost($getCost){
		$this->getCost = $getCost;
         $this->apiParas["getCost"] = $getCost;
	}

	public function getGetCost(){
	  return $this->getCost;
	}

                        	                   			private $sendCost;
    	                        
	public function setSendCost($sendCost){
		$this->sendCost = $sendCost;
         $this->apiParas["sendCost"] = $sendCost;
	}

	public function getSendCost(){
	  return $this->sendCost;
	}

                        	                   			private $packageCost;
    	                        
	public function setPackageCost($packageCost){
		$this->packageCost = $packageCost;
         $this->apiParas["packageCost"] = $packageCost;
	}

	public function getPackageCost(){
	  return $this->packageCost;
	}

                        	                   			private $totalCost;
    	                        
	public function setTotalCost($totalCost){
		$this->totalCost = $totalCost;
         $this->apiParas["totalCost"] = $totalCost;
	}

	public function getTotalCost(){
	  return $this->totalCost;
	}

                        	                   			private $shippingProvince;
    	                        
	public function setShippingProvince($shippingProvince){
		$this->shippingProvince = $shippingProvince;
         $this->apiParas["shippingProvince"] = $shippingProvince;
	}

	public function getShippingProvince(){
	  return $this->shippingProvince;
	}

                        	                   			private $shippingCity;
    	                        
	public function setShippingCity($shippingCity){
		$this->shippingCity = $shippingCity;
         $this->apiParas["shippingCity"] = $shippingCity;
	}

	public function getShippingCity(){
	  return $this->shippingCity;
	}

                        	                   			private $shippingCounty;
    	                        
	public function setShippingCounty($shippingCounty){
		$this->shippingCounty = $shippingCounty;
         $this->apiParas["shippingCounty"] = $shippingCounty;
	}

	public function getShippingCounty(){
	  return $this->shippingCounty;
	}

                        	                   			private $shippingTown;
    	                        
	public function setShippingTown($shippingTown){
		$this->shippingTown = $shippingTown;
         $this->apiParas["shippingTown"] = $shippingTown;
	}

	public function getShippingTown(){
	  return $this->shippingTown;
	}

                        	                   			private $shippingAddress;
    	                        
	public function setShippingAddress($shippingAddress){
		$this->shippingAddress = $shippingAddress;
         $this->apiParas["shippingAddress"] = $shippingAddress;
	}

	public function getShippingAddress(){
	  return $this->shippingAddress;
	}

                        	                   			private $totalWeight;
    	                        
	public function setTotalWeight($totalWeight){
		$this->totalWeight = $totalWeight;
         $this->apiParas["totalWeight"] = $totalWeight;
	}

	public function getTotalWeight(){
	  return $this->totalWeight;
	}

                        	                   			private $totalSquares;
    	                        
	public function setTotalSquares($totalSquares){
		$this->totalSquares = $totalSquares;
         $this->apiParas["totalSquares"] = $totalSquares;
	}

	public function getTotalSquares(){
	  return $this->totalSquares;
	}

                        	                   			private $logisticsNoExtDate;
    	                        
	public function setLogisticsNoExtDate($logisticsNoExtDate){
		$this->logisticsNoExtDate = $logisticsNoExtDate;
         $this->apiParas["logisticsNoExtDate"] = $logisticsNoExtDate;
	}

	public function getLogisticsNoExtDate(){
	  return $this->logisticsNoExtDate;
	}

}





        
 

