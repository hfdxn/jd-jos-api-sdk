<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class ActivityScopeDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityScopeDTO";
    }
        
    private $areaType;
    
    public function setAreaType($areaType){
        $this->params['areaType'] = $areaType;
    }

    public function getAreaType(){
        return $this->areaType;
    }
            
    private $areaDTOList;
                                        
    public function setAreaDTOList($areaDTOList){
        $size = count($areaDTOList);
        for ($i=0; $i<$size; $i++){
            $areaDTOList [$i] = $areaDTOList [$i] ->getInstance();
        }
        $this->params['areaDTOList'] = $areaDTOList;
    }
                                    
            
    private $channelList;
                        
    public function setChannelList($channelList){
        $this->params['channelList'] = $channelList;
    }
                    
            
    private $promoChannelList;
                        
    public function setPromoChannelList($promoChannelList){
        $this->params['promoChannelList'] = $promoChannelList;
    }
                    
            
    private $memberDTO;
            
    public function setMemberDTO($memberDTO){
        $this->params['memberDTO'] = $memberDTO ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>