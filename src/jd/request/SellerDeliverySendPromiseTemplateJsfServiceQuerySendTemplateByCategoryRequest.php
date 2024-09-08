<?php
class SellerDeliverySendPromiseTemplateJsfServiceQuerySendTemplateByCategoryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.delivery.SendPromiseTemplateJsfService.querySendTemplateByCategory";
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
                                                        		                                                        		                                    	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $dzSku;
    	                        
	public function setDzSku($dzSku){
		$this->dzSku = $dzSku;
         $this->apiParas["dzSku"] = $dzSku;
	}

	public function getDzSku(){
	  return $this->dzSku;
	}

                                            		                                    	                        	                        	                        	                                                                                    }





        
 

