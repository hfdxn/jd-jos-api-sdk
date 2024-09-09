<?php

namespace JdJos\jd\request\domain\UpdateSpuSymbolBind;
class BdsSymbol{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kechuangjie.rpc.domain.BdsSymbol";
    }
        
    private $secondClassifyId;
    
    public function setSecondClassifyId($secondClassifyId){
        $this->params['secondClassifyId'] = $secondClassifyId;
    }

    public function getSecondClassifyId(){
        return $this->secondClassifyId;
    }
            
    private $qualifyUrlList;
                        
    public function setQualifyUrlList($qualifyUrlList){
        $this->params['qualifyUrlList'] = $qualifyUrlList;
    }
                    
            
    private $qualifyEndDate;
    
    public function setQualifyEndDate($qualifyEndDate){
        $this->params['qualifyEndDate'] = $qualifyEndDate;
    }

    public function getQualifyEndDate(){
        return $this->qualifyEndDate;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>