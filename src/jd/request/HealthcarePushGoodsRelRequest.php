<?php
class HealthcarePushGoodsRelRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.healthcare.pushGoodsRel";
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
    private  $goodsRel;

    public function setGoodsRel($goodsRel){
        $this->apiParas['goodsRel'] = $goodsRel;
    }
    public function getGoodsRel(){
        return $this->apiParas['goodsRel'];
    }
}

?>