<?php
namespace DraftCommitDraft;
class SaleAttr{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.sku.JosSaleAttr";
    }
        
    private $attrValueAlias;
    
    public function setAttrValueAlias($attrValueAlias){
        $this->params['attrValueAlias'] = $attrValueAlias;
    }

    public function getAttrValueAlias(){
        return $this->attrValueAlias;
    }
            
    private $attrId;
    
    public function setAttrId($attrId){
        $this->params['attrId'] = $attrId;
    }

    public function getAttrId(){
        return $this->attrId;
    }
            
    private $attrValue;
    
    public function setAttrValue($attrValue){
        $this->params['attrValue'] = $attrValue;
    }

    public function getAttrValue(){
        return $this->attrValue;
    }
            
    private $attrValueSeqNo;
    
    public function setAttrValueSeqNo($attrValueSeqNo){
        $this->params['attrValueSeqNo'] = $attrValueSeqNo;
    }

    public function getAttrValueSeqNo(){
        return $this->attrValueSeqNo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>