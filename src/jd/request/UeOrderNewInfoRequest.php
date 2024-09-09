<?php

namespace JdJos\jd\request;
class UeOrderNewInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.info";
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
                                                             	                        	                                                                                                                                                                                                                                                                                        private $siteCode;
                              public function setSiteCode($siteCode ){
                 $this->siteCode=$siteCode;
                 $this->apiParas["siteCode"] = $siteCode;
              }

              public function getSiteCode(){
              	return $this->siteCode;
              }
                                                                                                                                                                                                                                                                                                                       private $address;
                              public function setAddress($address ){
                 $this->address=$address;
                 $this->apiParas["address"] = $address;
              }

              public function getAddress(){
              	return $this->address;
              }
                                                                                                                                                                                                                                                                                                                       private $siteTown;
                              public function setSiteTown($siteTown ){
                 $this->siteTown=$siteTown;
                 $this->apiParas["siteTown"] = $siteTown;
              }

              public function getSiteTown(){
              	return $this->siteTown;
              }
                                                                                                                                                                                                                                                                                                                       private $siteCity;
                              public function setSiteCity($siteCity ){
                 $this->siteCity=$siteCity;
                 $this->apiParas["siteCity"] = $siteCity;
              }

              public function getSiteCity(){
              	return $this->siteCity;
              }
                                                                                                                                                                                                                                                                                                                                                               private $siteCounty;
                              public function setSiteCounty($siteCounty ){
                 $this->siteCounty=$siteCounty;
                 $this->apiParas["siteCounty"] = $siteCounty;
              }

              public function getSiteCounty(){
              	return $this->siteCounty;
              }
                                                                                                                                                                                                                                                                                                                       private $siteName;
                              public function setSiteName($siteName ){
                 $this->siteName=$siteName;
                 $this->apiParas["siteName"] = $siteName;
              }

              public function getSiteName(){
              	return $this->siteName;
              }
                                                                                                                                                                                                                                                                                                                                                               private $contactMan;
                              public function setContactMan($contactMan ){
                 $this->contactMan=$contactMan;
                 $this->apiParas["contactMan"] = $contactMan;
              }

              public function getContactMan(){
              	return $this->contactMan;
              }
                                                                                                                                                                                                                                                                                                                       private $siteProvince;
                              public function setSiteProvince($siteProvince ){
                 $this->siteProvince=$siteProvince;
                 $this->apiParas["siteProvince"] = $siteProvince;
              }

              public function getSiteProvince(){
              	return $this->siteProvince;
              }
                                                                                                                                                                                                                                                                                                                       private $siteMobile;
                              public function setSiteMobile($siteMobile ){
                 $this->siteMobile=$siteMobile;
                 $this->apiParas["siteMobile"] = $siteMobile;
              }

              public function getSiteMobile(){
              	return $this->siteMobile;
              }
                                                                                                                                                                                                                                                                                                                       private $venderCode;
                              public function setVenderCode($venderCode ){
                 $this->venderCode=$venderCode;
                 $this->apiParas["venderCode"] = $venderCode;
              }

              public function getVenderCode(){
              	return $this->venderCode;
              }
                                                                                                                                                                                                                                                                                                                       private $appid;
                              public function setAppid($appid ){
                 $this->appid=$appid;
                 $this->apiParas["appid"] = $appid;
              }

              public function getAppid(){
              	return $this->appid;
              }
                                                                                                                                                                                                                                                                                                                                                               private $unifiedCode;
                              public function setUnifiedCode($unifiedCode ){
                 $this->unifiedCode=$unifiedCode;
                 $this->apiParas["unifiedCode"] = $unifiedCode;
              }

              public function getUnifiedCode(){
              	return $this->unifiedCode;
              }
                                                                                                                                                                                                                                                                                                                       private $personName;
                              public function setPersonName($personName ){
                 $this->personName=$personName;
                 $this->apiParas["personName"] = $personName;
              }

              public function getPersonName(){
              	return $this->personName;
              }
                                                                                                                                                                                                                                                                                                                       private $personMobile;
                              public function setPersonMobile($personMobile ){
                 $this->personMobile=$personMobile;
                 $this->apiParas["personMobile"] = $personMobile;
              }

              public function getPersonMobile(){
              	return $this->personMobile;
              }
                                                                                                                                                                                                                                                                                                                       private $personPib;
                              public function setPersonPib($personPib ){
                 $this->personPib=$personPib;
                 $this->apiParas["personPib"] = $personPib;
              }

              public function getPersonPib(){
              	return $this->personPib;
              }
                                                                                                                                                                                                                                                                                                                       private $accountName;
                              public function setAccountName($accountName ){
                 $this->accountName=$accountName;
                 $this->apiParas["accountName"] = $accountName;
              }

              public function getAccountName(){
              	return $this->accountName;
              }
                                                                                                                                                                                                                                                                                                                       private $bankCode;
                              public function setBankCode($bankCode ){
                 $this->bankCode=$bankCode;
                 $this->apiParas["bankCode"] = $bankCode;
              }

              public function getBankCode(){
              	return $this->bankCode;
              }
                                                                                                                                                                                                                                                                                                                       private $bankName;
                              public function setBankName($bankName ){
                 $this->bankName=$bankName;
                 $this->apiParas["bankName"] = $bankName;
              }

              public function getBankName(){
              	return $this->bankName;
              }
                                                                                                                                                                                                                                                                                                                       private $dutyParagraph;
                              public function setDutyParagraph($dutyParagraph ){
                 $this->dutyParagraph=$dutyParagraph;
                 $this->apiParas["dutyParagraph"] = $dutyParagraph;
              }

              public function getDutyParagraph(){
              	return $this->dutyParagraph;
              }
                                                                                                                                                                                                                                                                                                                       private $bankAccount;
                              public function setBankAccount($bankAccount ){
                 $this->bankAccount=$bankAccount;
                 $this->apiParas["bankAccount"] = $bankAccount;
              }

              public function getBankAccount(){
              	return $this->bankAccount;
              }
                                                                                                                }





        
 

