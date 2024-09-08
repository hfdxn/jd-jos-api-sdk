<?php
namespace DraftCommitDraft;
class Feature{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.JosFeature";
    }
        
    private $value;
    
    public function setValue($value){
        $this->params['value'] = $value;
    }

    public function getValue(){
        return $this->value;
    }
            
    private $key;
    
    public function setKey($key){
        $this->params['key'] = $key;
    }

    public function getKey(){
        return $this->key;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>