<?php

namespace JdJos\jd\request;
class SellerAccountApiAccountFacadeFindAccountsOnPageRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.account.api.AccountFacade.findAccountsOnPage";
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

                                            		                                    	                        	                                                                                                    		                                    	                   			private $buid;
    	                        
	public function setBuid($buid){
		$this->buid = $buid;
         $this->apiParas["buid"] = $buid;
	}

	public function getBuid(){
	  return $this->buid;
	}

                        	                   			private $tenant;
    	                        
	public function setTenant($tenant){
		$this->tenant = $tenant;
         $this->apiParas["tenant"] = $tenant;
	}

	public function getTenant(){
	  return $this->tenant;
	}

                            }





        
 

