<?php

namespace JdJos\jd\request\domain\EclpMasterOpenQueryDeptByPage;
class Page{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.eclp.common.Page";
    }
        
    private $iDisplayLength;
    
    public function setIDisplayLength($iDisplayLength){
        $this->params['iDisplayLength'] = $iDisplayLength;
    }

    public function getIDisplayLength(){
        return $this->iDisplayLength;
    }
            
    private $iDisplayStart;
    
    public function setIDisplayStart($iDisplayStart){
        $this->params['iDisplayStart'] = $iDisplayStart;
    }

    public function getIDisplayStart(){
        return $this->iDisplayStart;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>