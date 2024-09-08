<?php
class ImgzoneImageUploadRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.image.upload";
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
                                                        		                                    	                   			private $belongType;
    	                        
	public function setBelongType($belongType){
		$this->belongType = $belongType;
         $this->apiParas["belongType"] = $belongType;
	}

	public function getBelongType(){
	  return $this->belongType;
	}

                        	                   			private $accessToken;
    	                        
	public function setAccessToken($accessToken){
		$this->accessToken = $accessToken;
         $this->apiParas["accessToken"] = $accessToken;
	}

	public function getAccessToken(){
	  return $this->accessToken;
	}

                        	                   			private $callEnd;
    	                        
	public function setCallEnd($callEnd){
		$this->callEnd = $callEnd;
         $this->apiParas["callEnd"] = $callEnd;
	}

	public function getCallEnd(){
	  return $this->callEnd;
	}

                        	                                                                        		                                    	                   			private $imgName;
    	                        
	public function setImgName($imgName){
		$this->imgName = $imgName;
         $this->apiParas["imgName"] = $imgName;
	}

	public function getImgName(){
	  return $this->imgName;
	}

                        	                   			private $cateId;
    	                        
	public function setCateId($cateId){
		$this->cateId = $cateId;
         $this->apiParas["cateId"] = $cateId;
	}

	public function getCateId(){
	  return $this->cateId;
	}

                                                    	                   			private $imgFile;
    	                        
	public function setImgFile($imgFile){
		$this->imgFile = $imgFile;
         $this->apiParas["imgFile"] = $imgFile;
	}

	public function getImgFile(){
	  return $this->imgFile;
	}

}





        
 

