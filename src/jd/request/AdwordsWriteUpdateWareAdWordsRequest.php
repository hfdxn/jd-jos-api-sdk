<?php

namespace JdJos\jd\request;
class AdwordsWriteUpdateWareAdWordsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.adwords.write.updateWareAdWords";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                                            		                                    	                   			private $url;
    	                        
	public function setUrl($url){
		$this->url = $url;
         $this->apiParas["url"] = $url;
	}

	public function getUrl(){
	  return $this->url;
	}

                        	                   			private $urlWords;
    	                        
	public function setUrlWords($urlWords){
		$this->urlWords = $urlWords;
         $this->apiParas["urlWords"] = $urlWords;
	}

	public function getUrlWords(){
	  return $this->urlWords;
	}

                        	                   			private $words;
    	                        
	public function setWords($words){
		$this->words = $words;
         $this->apiParas["words"] = $words;
	}

	public function getWords(){
	  return $this->words;
	}

                            }





        
 

