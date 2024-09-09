<?php

namespace JdJos\jd\request;
class HomefwLogisticsTraceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.logistics.trace";
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

                                                 	                        	                                                                                                                                                                                                                                                                                        private $siteCode;
                              public function setSiteCode($siteCode ){
                 $this->siteCode=$siteCode;
                 $this->apiParas["siteCode"] = $siteCode;
              }

              public function getSiteCode(){
              	return $this->siteCode;
              }
                                                                                                                                                                                                                                                                                                                       private $city;
                              public function setCity($city ){
                 $this->city=$city;
                 $this->apiParas["city"] = $city;
              }

              public function getCity(){
              	return $this->city;
              }
                                                                                                                                                                                                                                                                                                                       private $operateTime;
                              public function setOperateTime($operateTime ){
                 $this->operateTime=$operateTime;
                 $this->apiParas["operateTime"] = $operateTime;
              }

              public function getOperateTime(){
              	return $this->operateTime;
              }
                                                                                                                                                                                                                                                                                                                       private $logisticsNoExt;
                              public function setLogisticsNoExt($logisticsNoExt ){
                 $this->logisticsNoExt=$logisticsNoExt;
                 $this->apiParas["logisticsNoExt"] = $logisticsNoExt;
              }

              public function getLogisticsNoExt(){
              	return $this->logisticsNoExt;
              }
                                                                                                                                                                                                                                                                                                                       private $siteName;
                              public function setSiteName($siteName ){
                 $this->siteName=$siteName;
                 $this->apiParas["siteName"] = $siteName;
              }

              public function getSiteName(){
              	return $this->siteName;
              }
                                                                                                                                                                                                                                                                                                                       private $scanType;
                              public function setScanType($scanType ){
                 $this->scanType=$scanType;
                 $this->apiParas["scanType"] = $scanType;
              }

              public function getScanType(){
              	return $this->scanType;
              }
                                                                                                                                                                                                                                                                                                                       private $desc;
                              public function setDesc($desc ){
                 $this->desc=$desc;
                 $this->apiParas["desc"] = $desc;
              }

              public function getDesc(){
              	return $this->desc;
              }
                                                                                                                                                                                                                                                                                                                       private $siteType;
                              public function setSiteType($siteType ){
                 $this->siteType=$siteType;
                 $this->apiParas["siteType"] = $siteType;
              }

              public function getSiteType(){
              	return $this->siteType;
              }
                                                                                                                }





        
 

