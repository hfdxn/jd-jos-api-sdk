<?php
class DpCheckPredictRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dp.check.predict";
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
                                    	                   			private $imgurl;
    	                        
	public function setImgurl($imgurl){
		$this->imgurl = $imgurl;
         $this->apiParas["imgurl"] = $imgurl;
	}

	public function getImgurl(){
	  return $this->imgurl;
	}

                        	                   			private $cateId;
    	                                                            
	public function setCateId($cateId){
		$this->cateId = $cateId;
         $this->apiParas["cate_id"] = $cateId;
	}

	public function getCateId(){
	  return $this->cateId;
	}

}





        
 

