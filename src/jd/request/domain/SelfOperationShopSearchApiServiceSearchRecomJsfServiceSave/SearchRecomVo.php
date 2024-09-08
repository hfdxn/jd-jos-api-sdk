<?php
namespace SelfOperationShopSearchApiServiceSearchRecomJsfServiceSave;
class SearchRecomVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.self.operation.shop.api.domain.search.SearchRecomVo";
    }
        
    private $content;
    
    public function setContent($content){
        $this->params['content'] = $content;
    }

    public function getContent(){
        return $this->content;
    }
            
    private $recomTermType;
    
    public function setRecomTermType($recomTermType){
        $this->params['recomTermType'] = $recomTermType;
    }

    public function getRecomTermType(){
        return $this->recomTermType;
    }
            
    private $actId;
    
    public function setActId($actId){
        $this->params['actId'] = $actId;
    }

    public function getActId(){
        return $this->actId;
    }
            
    private $recomSubtype;
    
    public function setRecomSubtype($recomSubtype){
        $this->params['recomSubtype'] = $recomSubtype;
    }

    public function getRecomSubtype(){
        return $this->recomSubtype;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>