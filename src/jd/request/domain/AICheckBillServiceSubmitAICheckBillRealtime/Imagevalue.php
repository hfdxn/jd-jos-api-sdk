<?php
namespace AICheckBillServiceSubmitAICheckBillRealtime;
class Imagevalue{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.gyl.sdk.dto.aicheckbill.AICheckBillImageParam";
    }
        
    private $imageUrl;
    
    public function setImageUrl($imageUrl){
        $this->params['imageUrl'] = $imageUrl;
    }

    public function getImageUrl(){
        return $this->imageUrl;
    }
            
    private $imageMd5;
    
    public function setImageMd5($imageMd5){
        $this->params['imageMd5'] = $imageMd5;
    }

    public function getImageMd5(){
        return $this->imageMd5;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>