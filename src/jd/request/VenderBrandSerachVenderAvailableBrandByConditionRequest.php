<?php
class VenderBrandSerachVenderAvailableBrandByConditionRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.brand.serachVenderAvailableBrandByCondition";
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
                                                        		                                    	                   			private $brandName;
    	                        
	public function setBrandName($brandName){
		$this->brandName = $brandName;
         $this->apiParas["brandName"] = $brandName;
	}

	public function getBrandName(){
	  return $this->brandName;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                        	                   			private $rowCount;
    	                        
	public function setRowCount($rowCount){
		$this->rowCount = $rowCount;
         $this->apiParas["rowCount"] = $rowCount;
	}

	public function getRowCount(){
	  return $this->rowCount;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                            }





        
 

