<?php

namespace JdJos\jd\request;
class IzaoCustomizeGetSuitProductRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.izao.customize.getSuitProduct";
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
                                                        		                                    	                   			private $suitType;
    	                        
	public function setSuitType($suitType){
		$this->suitType = $suitType;
         $this->apiParas["suitType"] = $suitType;
	}

	public function getSuitType(){
	  return $this->suitType;
	}

                                            		                                    	                   			private $countyId;
    	                        
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["countyId"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $stateId;
    	                        
	public function setStateId($stateId){
		$this->stateId = $stateId;
         $this->apiParas["stateId"] = $stateId;
	}

	public function getStateId(){
	  return $this->stateId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                                                    	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $skuCount;
    	                        
	public function setSkuCount($skuCount){
		$this->skuCount = $skuCount;
         $this->apiParas["skuCount"] = $skuCount;
	}

	public function getSkuCount(){
	  return $this->skuCount;
	}

                            }





        
 

