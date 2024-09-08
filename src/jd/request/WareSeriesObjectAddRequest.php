<?php
class WareSeriesObjectAddRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.series.object.add";
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
                                                        		                                    	                        	                        	                        	                        	                                                                        		                                    	                   			private $seriesName;
    	                        
	public function setSeriesName($seriesName){
		$this->seriesName = $seriesName;
         $this->apiParas["seriesName"] = $seriesName;
	}

	public function getSeriesName(){
	  return $this->seriesName;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
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





        
 

