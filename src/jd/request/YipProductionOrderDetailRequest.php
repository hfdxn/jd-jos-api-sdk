<?php
class YipProductionOrderDetailRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.production.orderDetail";
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
                                                        		                                    	                   			private $localeStr;
    	                        
	public function setLocaleStr($localeStr){
		$this->localeStr = $localeStr;
         $this->apiParas["localeStr"] = $localeStr;
	}

	public function getLocaleStr(){
	  return $this->localeStr;
	}

                        	                   			private $loginName;
    	                        
	public function setLoginName($loginName){
		$this->loginName = $loginName;
         $this->apiParas["loginName"] = $loginName;
	}

	public function getLoginName(){
	  return $this->loginName;
	}

                        	                   			private $coId;
    	                        
	public function setCoId($coId){
		$this->coId = $coId;
         $this->apiParas["coId"] = $coId;
	}

	public function getCoId(){
	  return $this->coId;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                            }





        
 

