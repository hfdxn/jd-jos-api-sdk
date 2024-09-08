<?php
class ContentWriteContentWriteServiceSaveArticleContentRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.content.write.ContentWriteService.saveArticleContent";
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
    private  $articleContentDto;

    public function setArticleContentDto($articleContentDto){
        $this->apiParas['articleContentDto'] = $articleContentDto;
    }
    public function getArticleContentDto(){
        return $this->apiParas['articleContentDto'];
    }
}

?>