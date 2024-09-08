<?php
namespace MarketToolPresaleCreate;
class ExtMap{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $iteam1;
    
    public function setIteam1($iteam1){
        $this->params['iteam1'] = $iteam1;
    }

    public function getIteam1(){
        return $this->iteam1;
    }
            
    private $iteam2;
    
    public function setIteam2($iteam2){
        $this->params['iteam2'] = $iteam2;
    }

    public function getIteam2(){
        return $this->iteam2;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>