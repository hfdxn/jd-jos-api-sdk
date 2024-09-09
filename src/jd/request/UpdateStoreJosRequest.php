<?php

namespace JdJos\jd\request;
class UpdateStoreJosRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.updateStoreJos";
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
                                                        		                                    	                   			private $authKey;
    	                        
	public function setAuthKey($authKey){
		$this->authKey = $authKey;
         $this->apiParas["authKey"] = $authKey;
	}

	public function getAuthKey(){
	  return $this->authKey;
	}

                        	                   			private $storeType;
    	                        
	public function setStoreType($storeType){
		$this->storeType = $storeType;
         $this->apiParas["storeType"] = $storeType;
	}

	public function getStoreType(){
	  return $this->storeType;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $lng;
    	                        
	public function setLng($lng){
		$this->lng = $lng;
         $this->apiParas["lng"] = $lng;
	}

	public function getLng(){
	  return $this->lng;
	}

                        	                   			private $contactName;
    	                        
	public function setContactName($contactName){
		$this->contactName = $contactName;
         $this->apiParas["contactName"] = $contactName;
	}

	public function getContactName(){
	  return $this->contactName;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $supplierCode;
    	                        
	public function setSupplierCode($supplierCode){
		$this->supplierCode = $supplierCode;
         $this->apiParas["supplierCode"] = $supplierCode;
	}

	public function getSupplierCode(){
	  return $this->supplierCode;
	}

                                            		                                    	                   			private $licenseUrl;
    	                        
	public function setLicenseUrl($licenseUrl){
		$this->licenseUrl = $licenseUrl;
         $this->apiParas["licenseUrl"] = $licenseUrl;
	}

	public function getLicenseUrl(){
	  return $this->licenseUrl;
	}

                        	                   			private $legalRepresentative;
    	                        
	public function setLegalRepresentative($legalRepresentative){
		$this->legalRepresentative = $legalRepresentative;
         $this->apiParas["legalRepresentative"] = $legalRepresentative;
	}

	public function getLegalRepresentative(){
	  return $this->legalRepresentative;
	}

                        	                   			private $licenseStart;
    	                        
	public function setLicenseStart($licenseStart){
		$this->licenseStart = $licenseStart;
         $this->apiParas["licenseStart"] = $licenseStart;
	}

	public function getLicenseStart(){
	  return $this->licenseStart;
	}

                        	                   			private $licenseEnd;
    	                        
	public function setLicenseEnd($licenseEnd){
		$this->licenseEnd = $licenseEnd;
         $this->apiParas["licenseEnd"] = $licenseEnd;
	}

	public function getLicenseEnd(){
	  return $this->licenseEnd;
	}

                        	                   			private $letterAddress;
    	                        
	public function setLetterAddress($letterAddress){
		$this->letterAddress = $letterAddress;
         $this->apiParas["letterAddress"] = $letterAddress;
	}

	public function getLetterAddress(){
	  return $this->letterAddress;
	}

                        	                   			private $companyName;
    	                        
	public function setCompanyName($companyName){
		$this->companyName = $companyName;
         $this->apiParas["companyName"] = $companyName;
	}

	public function getCompanyName(){
	  return $this->companyName;
	}

                        	                   			private $letterUrl;
    	                        
	public function setLetterUrl($letterUrl){
		$this->letterUrl = $letterUrl;
         $this->apiParas["letterUrl"] = $letterUrl;
	}

	public function getLetterUrl(){
	  return $this->letterUrl;
	}

                        	                   			private $letterStart;
    	                        
	public function setLetterStart($letterStart){
		$this->letterStart = $letterStart;
         $this->apiParas["letterStart"] = $letterStart;
	}

	public function getLetterStart(){
	  return $this->letterStart;
	}

                        	                   			private $letterEnd;
    	                        
	public function setLetterEnd($letterEnd){
		$this->letterEnd = $letterEnd;
         $this->apiParas["letterEnd"] = $letterEnd;
	}

	public function getLetterEnd(){
	  return $this->letterEnd;
	}

                        	                   			private $licenseCode;
    	                        
	public function setLicenseCode($licenseCode){
		$this->licenseCode = $licenseCode;
         $this->apiParas["licenseCode"] = $licenseCode;
	}

	public function getLicenseCode(){
	  return $this->licenseCode;
	}

                        	                   			private $licenseAddress;
    	                        
	public function setLicenseAddress($licenseAddress){
		$this->licenseAddress = $licenseAddress;
         $this->apiParas["licenseAddress"] = $licenseAddress;
	}

	public function getLicenseAddress(){
	  return $this->licenseAddress;
	}

                                                    	                   			private $mapBenchmark;
    	                        
	public function setMapBenchmark($mapBenchmark){
		$this->mapBenchmark = $mapBenchmark;
         $this->apiParas["mapBenchmark"] = $mapBenchmark;
	}

	public function getMapBenchmark(){
	  return $this->mapBenchmark;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $venderStoreId;
    	                        
	public function setVenderStoreId($venderStoreId){
		$this->venderStoreId = $venderStoreId;
         $this->apiParas["venderStoreId"] = $venderStoreId;
	}

	public function getVenderStoreId(){
	  return $this->venderStoreId;
	}

                        	                   			private $yn;
    	                        
	public function setYn($yn){
		$this->yn = $yn;
         $this->apiParas["yn"] = $yn;
	}

	public function getYn(){
	  return $this->yn;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $closeTime;
    	                        
	public function setCloseTime($closeTime){
		$this->closeTime = $closeTime;
         $this->apiParas["closeTime"] = $closeTime;
	}

	public function getCloseTime(){
	  return $this->closeTime;
	}

                        	                   			private $storeName;
    	                        
	public function setStoreName($storeName){
		$this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
	}

	public function getStoreName(){
	  return $this->storeName;
	}

                        	                   			private $openTime;
    	                        
	public function setOpenTime($openTime){
		$this->openTime = $openTime;
         $this->apiParas["openTime"] = $openTime;
	}

	public function getOpenTime(){
	  return $this->openTime;
	}

                                            		                                    	                   			private $afterSalePhone;
    	                        
	public function setAfterSalePhone($afterSalePhone){
		$this->afterSalePhone = $afterSalePhone;
         $this->apiParas["afterSalePhone"] = $afterSalePhone;
	}

	public function getAfterSalePhone(){
	  return $this->afterSalePhone;
	}

                        	                   			private $afterSaleType;
    	                        
	public function setAfterSaleType($afterSaleType){
		$this->afterSaleType = $afterSaleType;
         $this->apiParas["afterSaleType"] = $afterSaleType;
	}

	public function getAfterSaleType(){
	  return $this->afterSaleType;
	}

                                                    	                   			private $lat;
    	                        
	public function setLat($lat){
		$this->lat = $lat;
         $this->apiParas["lat"] = $lat;
	}

	public function getLat(){
	  return $this->lat;
	}

                                            		                                    	                   			private $coverage;
    	                        
	public function setCoverage($coverage){
		$this->coverage = $coverage;
         $this->apiParas["coverage"] = $coverage;
	}

	public function getCoverage(){
	  return $this->coverage;
	}

                        	                   			private $irregularityRange;
    	                        
	public function setIrregularityRange($irregularityRange){
		$this->irregularityRange = $irregularityRange;
         $this->apiParas["irregularityRange"] = $irregularityRange;
	}

	public function getIrregularityRange(){
	  return $this->irregularityRange;
	}

                        	                   			private $scopeType;
    	                        
	public function setScopeType($scopeType){
		$this->scopeType = $scopeType;
         $this->apiParas["scopeType"] = $scopeType;
	}

	public function getScopeType(){
	  return $this->scopeType;
	}

                                                    	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                            }





        
 

