<?php

namespace JdJos\jd\request;
class ImageReadFindTerminalImagesRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.image.read.findTerminalImages";
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
                                                        		                                    	                   			private $site;
    	                        
	public function setSite($site){
		$this->site = $site;
         $this->apiParas["site"] = $site;
	}

	public function getSite(){
	  return $this->site;
	}

                        	                   			private $productId;
    	                        
	public function setProductId($productId){
		$this->productId = $productId;
         $this->apiParas["productId"] = $productId;
	}

	public function getProductId(){
	  return $this->productId;
	}

                        	                   			private $imageGroupId;
    	                        
	public function setImageGroupId($imageGroupId){
		$this->imageGroupId = $imageGroupId;
         $this->apiParas["imageGroupId"] = $imageGroupId;
	}

	public function getImageGroupId(){
	  return $this->imageGroupId;
	}

                        	                   			private $userAgent;
    	                        
	public function setUserAgent($userAgent){
		$this->userAgent = $userAgent;
         $this->apiParas["userAgent"] = $userAgent;
	}

	public function getUserAgent(){
	  return $this->userAgent;
	}

                        	                   			private $imgType;
    	                        
	public function setImgType($imgType){
		$this->imgType = $imgType;
         $this->apiParas["imgType"] = $imgType;
	}

	public function getImgType(){
	  return $this->imgType;
	}

                                            		                                    	                        	                        	                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                                                                        		                                    	                        	                                                        }





        
 

