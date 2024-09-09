<?php

namespace JdJos\jd\request\domain\Jd3csOrderOrderFinish;
class RecycleInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.RecycleInfo";
    }
        
    private $realResiduePrice;
    
    public function setRealResiduePrice($realResiduePrice){
        $this->params['realResiduePrice'] = $realResiduePrice;
    }

    public function getRealResiduePrice(){
        return $this->realResiduePrice;
    }
            
    private $nameplatePic;
    
    public function setNameplatePic($nameplatePic){
        $this->params['nameplatePic'] = $nameplatePic;
    }

    public function getNameplatePic(){
        return $this->nameplatePic;
    }
            
    private $userVerifyPic;
    
    public function setUserVerifyPic($userVerifyPic){
        $this->params['userVerifyPic'] = $userVerifyPic;
    }

    public function getUserVerifyPic(){
        return $this->userVerifyPic;
    }
            
    private $progressing;
    
    public function setProgressing($progressing){
        $this->params['progressing'] = $progressing;
    }

    public function getProgressing(){
        return $this->progressing;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>