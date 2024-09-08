<?php
class DraftSearchDraftsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.draft.searchDrafts";
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
    private  $josSearchDraftParam;

    public function setJosSearchDraftParam($josSearchDraftParam){
        $this->apiParas['josSearchDraftParam'] = $josSearchDraftParam;
    }
    public function getJosSearchDraftParam(){
        return $this->apiParas['josSearchDraftParam'];
    }
}

?>