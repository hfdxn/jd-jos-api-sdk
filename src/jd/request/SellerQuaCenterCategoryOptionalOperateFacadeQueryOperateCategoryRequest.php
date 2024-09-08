<?php
class SellerQuaCenterCategoryOptionalOperateFacadeQueryOperateCategoryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.qua.center.CategoryOptionalOperateFacade.queryOperateCategory";
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
    private  $categoryOperateQuery;

    public function setCategoryOperateQuery($categoryOperateQuery){
        $this->apiParas['categoryOperateQuery'] = $categoryOperateQuery;
    }
    public function getCategoryOperateQuery(){
        return $this->apiParas['categoryOperateQuery'];
    }
    private  $callerParam;

    public function setCallerParam($callerParam){
        $this->apiParas['callerParam'] = $callerParam;
    }
    public function getCallerParam(){
        return $this->apiParas['callerParam'];
    }
}

?>