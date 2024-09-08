<?php
class DraftCommitDraftRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.draft.commitDraft";
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
    private  $josDraftInfo;

    public function setJosDraftInfo($josDraftInfo){
        $this->apiParas['josDraftInfo'] = $josDraftInfo;
    }
    public function getJosDraftInfo(){
        return $this->apiParas['josDraftInfo'];
    }
}

?>