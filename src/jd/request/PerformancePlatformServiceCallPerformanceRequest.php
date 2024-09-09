<?php

namespace JdJos\jd\request;
class PerformancePlatformServiceCallPerformanceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.PerformancePlatformService.callPerformance";
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

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                                            		                                    	                   			private $shopCode;
    	                        
	public function setShopCode($shopCode){
		$this->shopCode = $shopCode;
         $this->apiParas["shopCode"] = $shopCode;
	}

	public function getShopCode(){
	  return $this->shopCode;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $amount;
                              public function setAmount($amount ){
                 $this->amount=$amount;
                 $this->apiParas["amount"] = $amount;
              }

              public function getAmount(){
              	return $this->amount;
              }
                                                                                                                                                                                                                                                                                                                                              private $address;
                              public function setAddress($address ){
                 $this->address=$address;
                 $this->apiParas["address"] = $address;
              }

              public function getAddress(){
              	return $this->address;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderId;
                              public function setOrderId($orderId ){
                 $this->orderId=$orderId;
                 $this->apiParas["orderId"] = $orderId;
              }

              public function getOrderId(){
              	return $this->orderId;
              }
                                                                                                                                                                                                                                                                                                                                              private $city;
                              public function setCity($city ){
                 $this->city=$city;
                 $this->apiParas["city"] = $city;
              }

              public function getCity(){
              	return $this->city;
              }
                                                                                                                                                                                                                                                                                                                                              private $latitude;
                              public function setLatitude($latitude ){
                 $this->latitude=$latitude;
                 $this->apiParas["latitude"] = $latitude;
              }

              public function getLatitude(){
              	return $this->latitude;
              }
                                                                                                                                                                                                                                                                                                                                              private $latType;
                              public function setLatType($latType ){
                 $this->latType=$latType;
                 $this->apiParas["latType"] = $latType;
              }

              public function getLatType(){
              	return $this->latType;
              }
                                                                                                                                                                                                                                                                                                                                              private $weight;
                              public function setWeight($weight ){
                 $this->weight=$weight;
                 $this->apiParas["weight"] = $weight;
              }

              public function getWeight(){
              	return $this->weight;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuType;
                              public function setSkuType($skuType ){
                 $this->skuType=$skuType;
                 $this->apiParas["skuType"] = $skuType;
              }

              public function getSkuType(){
              	return $this->skuType;
              }
                                                                                                                                                                                                                                                                                                                                              private $consigneeName;
                              public function setConsigneeName($consigneeName ){
                 $this->consigneeName=$consigneeName;
                 $this->apiParas["consigneeName"] = $consigneeName;
              }

              public function getConsigneeName(){
              	return $this->consigneeName;
              }
                                                                                                                                                                                                                                                                                                                                              private $province;
                              public function setProvince($province ){
                 $this->province=$province;
                 $this->apiParas["province"] = $province;
              }

              public function getProvince(){
              	return $this->province;
              }
                                                                                                                                                                                                                                                                                                                                              private $phone;
                              public function setPhone($phone ){
                 $this->phone=$phone;
                 $this->apiParas["phone"] = $phone;
              }

              public function getPhone(){
              	return $this->phone;
              }
                                                                                                                                                                                                                                                                                                                                              private $advancePayment;
                              public function setAdvancePayment($advancePayment ){
                 $this->advancePayment=$advancePayment;
                 $this->apiParas["advancePayment"] = $advancePayment;
              }

              public function getAdvancePayment(){
              	return $this->advancePayment;
              }
                                                                                                                                                                                                                                                                                                                                              private $street;
                              public function setStreet($street ){
                 $this->street=$street;
                 $this->apiParas["street"] = $street;
              }

              public function getStreet(){
              	return $this->street;
              }
                                                                                                                                                                                                                                                                                                                                              private $district;
                              public function setDistrict($district ){
                 $this->district=$district;
                 $this->apiParas["district"] = $district;
              }

              public function getDistrict(){
              	return $this->district;
              }
                                                                                                                                                                                                                                                                                                                                              private $tel;
                              public function setTel($tel ){
                 $this->tel=$tel;
                 $this->apiParas["tel"] = $tel;
              }

              public function getTel(){
              	return $this->tel;
              }
                                                                                                                                                                                                                                                                                                                                              private $performancer;
                              public function setPerformancer($performancer ){
                 $this->performancer=$performancer;
                 $this->apiParas["performancer"] = $performancer;
              }

              public function getPerformancer(){
              	return $this->performancer;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderMark;
                              public function setOrderMark($orderMark ){
                 $this->orderMark=$orderMark;
                 $this->apiParas["orderMark"] = $orderMark;
              }

              public function getOrderMark(){
              	return $this->orderMark;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuNum;
                              public function setSkuNum($skuNum ){
                 $this->skuNum=$skuNum;
                 $this->apiParas["skuNum"] = $skuNum;
              }

              public function getSkuNum(){
              	return $this->skuNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $longitude;
                              public function setLongitude($longitude ){
                 $this->longitude=$longitude;
                 $this->apiParas["longitude"] = $longitude;
              }

              public function getLongitude(){
              	return $this->longitude;
              }
                                                                                                                                                                                                                                                                                                                                              private $virtualPhone;
                              public function setVirtualPhone($virtualPhone ){
                 $this->virtualPhone=$virtualPhone;
                 $this->apiParas["virtualPhone"] = $virtualPhone;
              }

              public function getVirtualPhone(){
              	return $this->virtualPhone;
              }
                                                                                                                                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                                                        }





        
 

