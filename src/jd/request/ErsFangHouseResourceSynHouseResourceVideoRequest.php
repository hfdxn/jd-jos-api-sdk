<?php
class ErsFangHouseResourceSynHouseResourceVideoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.houseResource.synHouseResourceVideo";
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
                                                        		                                    	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                   			private $pSourceId;
    	                        
	public function setPSourceId($pSourceId){
		$this->pSourceId = $pSourceId;
         $this->apiParas["pSourceId"] = $pSourceId;
	}

	public function getPSourceId(){
	  return $this->pSourceId;
	}

                        	                   			private $videoName;
    	                        
	public function setVideoName($videoName){
		$this->videoName = $videoName;
         $this->apiParas["videoName"] = $videoName;
	}

	public function getVideoName(){
	  return $this->videoName;
	}

                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $videoTag;
    	                        
	public function setVideoTag($videoTag){
		$this->videoTag = $videoTag;
         $this->apiParas["videoTag"] = $videoTag;
	}

	public function getVideoTag(){
	  return $this->videoTag;
	}

                        	                   			private $videoDesc;
    	                        
	public function setVideoDesc($videoDesc){
		$this->videoDesc = $videoDesc;
         $this->apiParas["videoDesc"] = $videoDesc;
	}

	public function getVideoDesc(){
	  return $this->videoDesc;
	}

                        	                   			private $fileSize;
    	                        
	public function setFileSize($fileSize){
		$this->fileSize = $fileSize;
         $this->apiParas["fileSize"] = $fileSize;
	}

	public function getFileSize(){
	  return $this->fileSize;
	}

                        	                            }





        
 

