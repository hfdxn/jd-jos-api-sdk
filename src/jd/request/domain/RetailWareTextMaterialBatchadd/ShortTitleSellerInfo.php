<?php
namespace RetailWareTextMaterialBatchadd;
class ShortTitleSellerInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.vender.media.api.video.use.domain.relative.ShortTitleSellerInfo";
    }
        
    private $sellPoint;
                        
    public function setSellPoint($sellPoint){
        $this->params['sellPoint'] = $sellPoint;
    }
                    
            
    private $marketTitle;
    
    public function setMarketTitle($marketTitle){
        $this->params['marketTitle'] = $marketTitle;
    }

    public function getMarketTitle(){
        return $this->marketTitle;
    }
            
    private $skuIds;
                        
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }
                    
            
    private $marketPoint;
                        
    public function setMarketPoint($marketPoint){
        $this->params['marketPoint'] = $marketPoint;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>