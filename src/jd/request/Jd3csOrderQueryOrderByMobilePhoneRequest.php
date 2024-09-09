<?php

namespace JdJos\jd\request;
class Jd3csOrderQueryOrderByMobilePhoneRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jd3cs.order.queryOrderByMobilePhone";
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

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $createBy;
    	                        
	public function setCreateBy($createBy){
		$this->createBy = $createBy;
         $this->apiParas["createBy"] = $createBy;
	}

	public function getCreateBy(){
	  return $this->createBy;
	}

                                            		                                    	                   			private $mobilePhone;
    	                        
	public function setMobilePhone($mobilePhone){
		$this->mobilePhone = $mobilePhone;
         $this->apiParas["mobilePhone"] = $mobilePhone;
	}

	public function getMobilePhone(){
	  return $this->mobilePhone;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                                                        }





        
 

