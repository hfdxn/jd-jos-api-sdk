<?php

namespace JdJos\jd\request;
class WareSpuUniqueCodeListSearchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.spu.uniqueCodeList.search";
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
                                                        		                                    	                   			private $uniqueCodeType;
    	                        
	public function setUniqueCodeType($uniqueCodeType){
		$this->uniqueCodeType = $uniqueCodeType;
         $this->apiParas["uniqueCodeType"] = $uniqueCodeType;
	}

	public function getUniqueCodeType(){
	  return $this->uniqueCodeType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $categoryId;
                              public function setCategoryId($categoryId ){
                 $this->categoryId=$categoryId;
                 $this->apiParas["categoryId"] = $categoryId;
              }

              public function getCategoryId(){
              	return $this->categoryId;
              }
                                                                                                                                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $brandId;
                              public function setBrandId($brandId ){
                 $this->brandId=$brandId;
                 $this->apiParas["brandId"] = $brandId;
              }

              public function getBrandId(){
              	return $this->brandId;
              }
                                                                                                                                                            		                                    	                        	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $userAgent;
    	                        
	public function setUserAgent($userAgent){
		$this->userAgent = $userAgent;
         $this->apiParas["userAgent"] = $userAgent;
	}

	public function getUserAgent(){
	  return $this->userAgent;
	}

                                                        }





        
 

